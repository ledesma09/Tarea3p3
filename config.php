<?php
// config.php - conexión con SQLite

$db_path = __DIR__ . '/database/inventario.sqlite';

$dsn = "sqlite:$db_path";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, null, null, $options);
} catch (PDOException $e) {
    die("Error de conexión con SQLite: " . $e->getMessage());
}