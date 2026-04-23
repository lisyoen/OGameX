<?php

namespace OGame\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use OGame\Http\Controllers\OGameController;
use OGame\Services\PlayerService;
use OGame\Services\TranslationFileService;
use OGame\Services\TranslationPlaceholderService;
use Symfony\Component\Process\Process;

/**
 * Admin Translations Controller
 *
 * Manages translation files for the OGame admin portal.
 * Ported from tx-console Next.js app routes.
 */
class TranslationsController extends OGameController
{
    /**
     * Show namespace list with status statistics
     */
    public function index(
        PlayerService $player,
        TranslationFileService $files,
        TranslationPlaceholderService $placeholders
    ): View {
        $namespaces = [];
        foreach ($files->listNamespaces() as $ns) {
            $en = $files->loadFlat($ns, 'en');
            $ko = $files->loadFlat($ns, 'ko');
            $counts = [
                'ok' => 0,
                'untranslated' => 0,
                'todo' => 0,
                'placeholder_mismatch' => 0,
                'missing_ko' => 0,
                'extra_ko' => 0,
            ];
            foreach ($en as $k => $v) {
                $status = $placeholders->judgeStatus((string)$v, $ko[$k] ?? null);
                $counts[$status]++;
            }
            foreach ($ko as $k => $v) {
                if (!isset($en[$k])) {
                    $counts['extra_ko']++;
                }
            }
            $namespaces[] = [
                'name' => $ns,
                'key_count' => count($en),
                'counts' => $counts,
            ];
        }
        return view('ingame.admin.translations.index', [
            'namespaces' => $namespaces,
        ]);
    }

    /**
     * Show en/ko matching table for a specific namespace
     */
    public function show(
        string $ns,
        Request $request,
        PlayerService $player,
        TranslationFileService $files,
        TranslationPlaceholderService $placeholders
    ): View {
        $allNs = $files->listNamespaces();
        abort_unless(in_array($ns, $allNs, true), 404);

        $en = $files->loadFlat($ns, 'en');
        $ko = $files->loadFlat($ns, 'ko');
        $pairs = [];
        foreach ($en as $k => $v) {
            $pairs[] = [
                'key' => $k,
                'en' => (string)$v,
                'ko' => isset($ko[$k]) ? (string)$ko[$k] : null,
                'status' => $placeholders->judgeStatus((string)$v, $ko[$k] ?? null),
            ];
        }
        foreach ($ko as $k => $v) {
            if (!isset($en[$k])) {
                $pairs[] = [
                    'key' => $k,
                    'en' => '',
                    'ko' => (string)$v,
                    'status' => 'extra_ko',
                ];
            }
        }

        // Filter and search
        $filter = $request->query('filter', 'all');
        $q = (string)$request->query('q', '');
        $filtered = $pairs;
        if ($filter !== 'all') {
            $filtered = array_values(array_filter($filtered, fn($p) => $p['status'] === $filter));
        }
        if ($q !== '') {
            $ql = mb_strtolower($q);
            $filtered = array_values(array_filter($filtered, function ($p) use ($ql) {
                return str_contains(mb_strtolower($p['key']), $ql)
                    || str_contains(mb_strtolower($p['en']), $ql)
                    || str_contains(mb_strtolower($p['ko'] ?? ''), $ql);
            }));
        }

        return view('ingame.admin.translations.show', [
            'ns' => $ns,
            'pairs' => $filtered,
            'totals' => [
                'all' => count($pairs),
            ],
            'filter' => $filter,
            'q' => $q,
        ]);
    }

    /**
     * Save a single ko value (AJAX)
     * POST /admin/translations/save
     * JSON: { ns, key, newValue }
     */
    public function save(
        Request $request,
        TranslationFileService $files,
        TranslationPlaceholderService $placeholders
    ): JsonResponse {
        $data = $request->validate([
            'ns' => 'required|string|max:64',
            'key' => 'required|string|max:256',
            'newValue' => 'required|string|max:10000',
        ]);

        $allNs = $files->listNamespaces();
        if (!in_array($data['ns'], $allNs, true)) {
            return response()->json(['error' => 'Unknown namespace'], 400);
        }

        $en = $files->loadFlat($data['ns'], 'en');
        if (!array_key_exists($data['key'], $en)) {
            return response()->json(['error' => 'Key not in en'], 400);
        }

        $cmp = $placeholders->compare((string)$en[$data['key']], $data['newValue']);
        if (!$cmp['match']) {
            return response()->json([
                'error' => 'Placeholder mismatch',
                'diff' => $cmp['diff'],
            ], 400);
        }

        $result = $files->updateEntry($data['ns'], $data['key'], $data['newValue']);
        $status = $placeholders->judgeStatus((string)$en[$data['key']], $data['newValue']);

        return response()->json([
            'ok' => true,
            'old' => $result['old'],
            'new' => $result['new'],
            'status' => $status,
        ]);
    }

    /**
     * Get git change status (AJAX)
     * GET /admin/translations/status
     */
    public function status(): JsonResponse
    {
        [$branch, $files] = $this->gitInfo();
        $changedKo = [];
        $changedOther = [];
        foreach ($files as $f) {
            if (str_starts_with($f, 'resources/lang/ko/') && str_ends_with($f, '.php')) {
                $changedKo[] = $f;
            } else {
                $changedOther[] = $f;
            }
        }
        return response()->json([
            'branch' => $branch,
            'changed_ko' => $changedKo,
            'changed_other' => $changedOther,
        ]);
    }

    /**
     * Commit changes (AJAX)
     * POST /admin/translations/commit
     *
     * Note: Auto-commit inside container not yet implemented.
     * Returns 501 with manual CLI guidance.
     */
    public function commit(Request $request): JsonResponse
    {
        [$branch, $files] = $this->gitInfo();
        $changedKo = [];
        $changedOther = [];
        foreach ($files as $f) {
            if (str_starts_with($f, 'resources/lang/ko/') && str_ends_with($f, '.php')) {
                $changedKo[] = $f;
            } else {
                $changedOther[] = $f;
            }
        }
        if (!empty($changedOther)) {
            return response()->json([
                'error' => 'Non-ko files changed: ' . implode(', ', $changedOther),
            ], 400);
        }
        if (empty($changedKo)) {
            return response()->json(['error' => 'Nothing to commit'], 409);
        }

        // Auto-commit not implemented - require manual CLI
        return response()->json([
            'ok' => false,
            'message' => 'Auto-commit not yet implemented inside container. Use CLI: git add resources/lang/ko/*.php && git commit -m "translate(ko): ..." && git push',
            'changed_ko' => $changedKo,
        ], 501);
    }

    /**
     * Get git info (branch and changed files)
     *
     * @return array{0: string, 1: array<string>}
     */
    private function gitInfo(): array
    {
        try {
            $proc = new Process(['git', 'status', '--porcelain'], '/var/www');
            $proc->mustRun();
            $out = $proc->getOutput();
            $files = [];
            foreach (explode("\n", trim($out)) as $line) {
                if (empty($line)) {
                    continue;
                }
                $files[] = trim(substr($line, 3));
            }
            $branchProc = new Process(['git', 'rev-parse', '--abbrev-ref', 'HEAD'], '/var/www');
            $branchProc->mustRun();
            $branch = trim($branchProc->getOutput());
            return [$branch, $files];
        } catch (\Throwable $e) {
            return ['(unknown)', []];
        }
    }
}
