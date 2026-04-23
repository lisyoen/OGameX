<?php

namespace OGame\Services;

/**
 * Translation Placeholder Service
 *
 * Extracts, compares, and validates placeholders in translation strings.
 * Ported from tx-console placeholders.ts
 */
class TranslationPlaceholderService
{
    /**
     * Extract placeholders from a string
     *
     * @param string $s Input string
     * @return array{colons: array<string>, braces: array<string>}
     */
    public function extract(string $s): array
    {
        preg_match_all('/:[a-z_][a-z0-9_]*/i', $s, $c);
        preg_match_all('/\{[a-z_][a-z0-9_]*\}/i', $s, $b);
        return [
            'colons' => $c[0] ?? [],
            'braces' => $b[0] ?? [],
        ];
    }

    /**
     * Compare placeholders between en and ko strings
     *
     * @param string $en English string
     * @param string $ko Korean string
     * @return array{match: bool, diff: array<string>}
     */
    public function compare(string $en, string $ko): array
    {
        $pe = $this->extract($en);
        $pk = $this->extract($ko);
        sort($pe['colons']);
        sort($pk['colons']);
        sort($pe['braces']);
        sort($pk['braces']);
        $match = ($pe['colons'] === $pk['colons']) && ($pe['braces'] === $pk['braces']);
        $diff = [];
        foreach (array_diff($pe['colons'], $pk['colons']) as $m) {
            $diff[] = '-' . $m;
        }
        foreach (array_diff($pk['colons'], $pe['colons']) as $m) {
            $diff[] = '+' . $m;
        }
        foreach (array_diff($pe['braces'], $pk['braces']) as $m) {
            $diff[] = '-' . $m;
        }
        foreach (array_diff($pk['braces'], $pe['braces']) as $m) {
            $diff[] = '+' . $m;
        }
        return ['match' => $match, 'diff' => $diff];
    }

    /**
     * Judge status of a translation entry
     *
     * @param string $en English value
     * @param string|null $ko Korean value
     * @return string Status: 'missing_ko', 'placeholder_mismatch', 'todo', 'untranslated', 'ok'
     */
    public function judgeStatus(string $en, ?string $ko): string
    {
        if ($ko === null) {
            return 'missing_ko';
        }
        $cmp = $this->compare($en, $ko);
        if (!$cmp['match']) {
            return 'placeholder_mismatch';
        }
        if (preg_match('/\bTODO\b/i', $ko)) {
            return 'todo';
        }
        if (trim($en) === trim($ko)) {
            return 'untranslated';
        }
        return 'ok';
    }
}
