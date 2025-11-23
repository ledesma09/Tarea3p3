<?php
require 'config.php';

try {
    $pdo->exec("CREATE TABLE IF NOT EXISTS productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        precio REAL NOT NULL,
        cantidad INTEGER NOT NULL,
        categoria TEXT
    )");

    echo "Base de datos creada correctamente en SQLite.";
} catch (PDOException $e) {
    echo "Error al crear tablas: " . $e->getMessage();
}
