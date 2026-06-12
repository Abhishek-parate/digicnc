<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Database;

final class Lead
{
    public static function create(array $data): bool
    {
        $pdo = Database::connection();
        if (!$pdo) {
            self::storeFallback($data);
            return true;
        }

        $statement = $pdo->prepare(
            'INSERT INTO leads (name, email, phone, company, service_interest, project_budget, message, source_page, ip_address, user_agent, status, created_at)
             VALUES (:name, :email, :phone, :company, :service_interest, :project_budget, :message, :source_page, :ip_address, :user_agent, :status, NOW())'
        );

        return $statement->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'company' => $data['company'],
            'service_interest' => $data['service_interest'],
            'project_budget' => $data['project_budget'],
            'message' => $data['message'],
            'source_page' => $data['source_page'],
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255),
            'status' => 'new',
        ]);
    }

    public static function latest(int $limit = 10): array
    {
        $pdo = Database::connection();
        if (!$pdo) {
            return self::fallbackRows();
        }

        $statement = $pdo->prepare('SELECT * FROM leads ORDER BY created_at DESC LIMIT :limit');
        $statement->bindValue('limit', $limit, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function count(): int
    {
        $pdo = Database::connection();
        if (!$pdo) {
            return count(self::fallbackRows());
        }

        return (int) $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();
    }

    private static function storeFallback(array $data): void
    {
        $path = BASE_PATH . '/storage/leads.jsonl';
        $data['created_at'] = date('c');
        file_put_contents($path, json_encode($data, JSON_UNESCAPED_SLASHES) . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    private static function fallbackRows(): array
    {
        $path = BASE_PATH . '/storage/leads.jsonl';
        if (!is_file($path)) {
            return [];
        }

        $rows = array_filter(explode(PHP_EOL, trim((string) file_get_contents($path))));
        $rows = array_map(fn (string $row) => json_decode($row, true) ?: [], $rows);
        return array_reverse($rows);
    }
}
