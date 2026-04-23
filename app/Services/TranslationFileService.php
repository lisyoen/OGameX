<?php

namespace OGame\Services;

/**
 * Translation File Service
 *
 * Parses, flattens, and writes PHP translation files.
 * Ported from tx-console phpLang.ts + phpWriter.ts
 */
class TranslationFileService
{
    private const LANG_BASE = '/var/www/resources/lang';
    private const SUPPORTED_LOCALES = ['en', 'ko'];
    private array $cache = []; // ns:locale => flat entries (process-lifetime cache)

    /**
     * List all translation namespaces (filenames without .php)
     *
     * @return array<string>
     */
    public function listNamespaces(): array
    {
        $files = glob(self::LANG_BASE . '/en/*.php');
        if ($files === false) {
            return [];
        }
        return array_values(array_map(
            fn($p) => pathinfo($p, PATHINFO_FILENAME),
            $files
        ));
    }

    /**
     * Load flattened dot-path entries for a specific namespace and locale
     *
     * @param string $ns Namespace (e.g., 't_buddies')
     * @param string $locale Locale code (e.g., 'en', 'ko')
     * @return array<string, mixed> Flattened key-value pairs
     */
    public function loadFlat(string $ns, string $locale): array
    {
        $key = $ns . ':' . $locale;
        if (isset($this->cache[$key])) {
            return $this->cache[$key];
        }
        $path = self::LANG_BASE . "/$locale/$ns.php";
        if (!is_file($path)) {
            return [];
        }
        $data = include $path;
        if (!is_array($data)) {
            return [];
        }
        return $this->cache[$key] = $this->flatten($data);
    }

    /**
     * Update a single entry and rewrite the file
     *
     * @param string $ns Namespace
     * @param string $key Dot-path key
     * @param string $newValue New translation value
     * @return array{old: string|null, new: string}
     */
    public function updateEntry(string $ns, string $key, string $newValue): array
    {
        $flat = $this->loadFlat($ns, 'ko');
        $oldValue = $flat[$key] ?? null;
        $flat[$key] = $newValue;
        $this->writeFlat($ns, $flat);
        unset($this->cache["$ns:ko"]); // invalidate cache
        return ['old' => $oldValue, 'new' => $newValue];
    }

    /**
     * Write flattened entries back to PHP file
     *
     * @param string $ns Namespace
     * @param array<string, mixed> $flat Flattened entries
     * @return void
     */
    public function writeFlat(string $ns, array $flat): void
    {
        $nested = $this->unflatten($flat);
        $body = $this->renderPhpArray($nested, 0);
        $content = "<?php\n\nreturn " . $body . ";\n";
        file_put_contents(self::LANG_BASE . "/ko/$ns.php", $content);
    }

    /**
     * Flatten nested array into dot-path notation
     *
     * @param array<string|int, mixed> $data Nested array
     * @param string $prefix Current prefix
     * @return array<string, mixed>
     */
    private function flatten(array $data, string $prefix = ''): array
    {
        $out = [];
        foreach ($data as $k => $v) {
            $key = $prefix === '' ? (string)$k : $prefix . '.' . $k;
            if (is_array($v)) {
                $out = array_merge($out, $this->flatten($v, $key));
            } else {
                $out[$key] = $v;
            }
        }
        return $out;
    }

    /**
     * Unflatten dot-path notation into nested array
     *
     * @param array<string, mixed> $flat Flattened entries
     * @return array<string|int, mixed>
     */
    private function unflatten(array $flat): array
    {
        $nested = [];
        foreach ($flat as $k => $v) {
            $parts = explode('.', $k);
            $ref = &$nested;
            foreach ($parts as $i => $p) {
                if ($i === count($parts) - 1) {
                    $ref[$p] = $v;
                } else {
                    if (!isset($ref[$p]) || !is_array($ref[$p])) {
                        $ref[$p] = [];
                    }
                    $ref = &$ref[$p];
                }
            }
            unset($ref);
        }
        return $nested;
    }

    /**
     * Render PHP array in var_export compatible format
     *
     * @param mixed $v Value to render
     * @param int $indent Current indentation level
     * @return string
     */
    private function renderPhpArray($v, int $indent): string
    {
        $pad = str_repeat('  ', $indent);
        $padNext = str_repeat('  ', $indent + 1);

        if (is_string($v)) {
            $escaped = str_replace(['\\', "'"], ['\\\\', "\\'"], $v);
            return "'$escaped'";
        }
        if (is_int($v) || is_float($v)) {
            return (string)$v;
        }
        if (is_bool($v)) {
            return $v ? 'true' : 'false';
        }
        if ($v === null) {
            return 'NULL';
        }
        if (is_array($v)) {
            if (empty($v)) {
                return "array (\n$pad)";
            }
            $items = [];
            foreach ($v as $k => $val) {
                $keyStr = is_int($k) ? $k : "'" . str_replace(['\\', "'"], ['\\\\', "\\'"], $k) . "'";
                $items[] = $padNext . $keyStr . ' => ' . $this->renderPhpArray($val, $indent + 1);
            }
            return "array (\n" . implode(",\n", $items) . ",\n$pad)";
        }
        throw new \RuntimeException('Unsupported type: ' . gettype($v));
    }
}
