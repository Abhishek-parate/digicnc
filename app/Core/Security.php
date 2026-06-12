<?php

declare(strict_types=1);

namespace App\Core;

final class Security
{
    public static function csrfToken(): string
    {
        if (empty($_SESSION['_csrf'])) {
            $_SESSION['_csrf'] = bin2hex(random_bytes(32));
        }

        return $_SESSION['_csrf'];
    }

    public static function validateCsrf(?string $token): bool
    {
        return is_string($token)
            && isset($_SESSION['_csrf'])
            && hash_equals((string) $_SESSION['_csrf'], $token);
    }

    public static function text(?string $value, int $max = 255): string
    {
        $value = trim((string) $value);
        $value = strip_tags($value);
        $value = preg_replace('/\s+/', ' ', $value) ?? '';
        return mb_substr($value, 0, $max);
    }

    public static function email(?string $value): string
    {
        $value = filter_var(trim((string) $value), FILTER_SANITIZE_EMAIL);
        return filter_var($value, FILTER_VALIDATE_EMAIL) ? $value : '';
    }

    public static function phone(?string $value): string
    {
        return preg_replace('/[^0-9+\-\s]/', '', trim((string) $value)) ?? '';
    }

    public static function richText(?string $value): string
    {
        $allowed = '<p><br><strong><b><em><i><ul><ol><li><h2><h3><h4><blockquote><a>';
        $value = strip_tags((string) $value, $allowed);
        return preg_replace('/javascript:/i', '', $value) ?? '';
    }
}
