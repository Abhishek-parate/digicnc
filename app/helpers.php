<?php

declare(strict_types=1);

function config(string $key, mixed $default = null): mixed
{
    static $config = null;
    if ($config === null) {
        $config = require BASE_PATH . '/app/config/config.php';
    }

    $segments = explode('.', $key);
    $value = $config;
    foreach ($segments as $segment) {
        if (!is_array($value) || !array_key_exists($segment, $value)) {
            return $default;
        }
        $value = $value[$segment];
    }

    return $value;
}

function env_value(string $key, mixed $default = null): mixed
{
    $value = getenv($key);
    return $value === false || $value === '' ? $default : $value;
}

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function app_base_path(): string
{
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    if (!str_ends_with($script, 'index.php')) {
        return '';
    }

    $base = preg_replace('#/public/index\.php$#', '', $script);
    $base = preg_replace('#/index\.php$#', '', $base ?? '');
    return rtrim((string) $base, '/');
}

function app_url(string $path = ''): string
{
    $base = app_base_path();
    $path = '/' . ltrim($path, '/');
    return ($base === '' ? '' : $base) . ($path === '/' ? '/' : $path);
}

function full_url(string $path = ''): string
{
    $configured = rtrim((string) config('app.url', ''), '/');
    if ($configured !== '') {
        return $configured . '/' . ltrim($path, '/');
    }

    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $scheme . '://' . $host . app_url($path);
}

function asset_url(string $path): string
{
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $assetPath = str_contains($script, '/public/index.php')
        ? app_base_path() . '/public/' . ltrim($path, '/')
        : app_base_path() . '/' . ltrim($path, '/');

    return $assetPath;
}

function is_active(string $path): bool
{
    $current = trim((string) ($_GET['path'] ?? parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH)), '/');
    $path = trim($path, '/');
    return $current === $path || ($path === '' && $current === '');
}

function csrf_field(): string
{
    return '<input type="hidden" name="_csrf" value="' . e(\App\Core\Security::csrfToken()) . '">';
}

function slugify(string $value): string
{
    $value = strtolower(trim($value));
    $value = preg_replace('/[^a-z0-9]+/i', '-', $value) ?? '';
    return trim($value, '-');
}

function reading_time(string $content): int
{
    $words = str_word_count(strip_tags($content));
    return max(1, (int) ceil($words / 220));
}
