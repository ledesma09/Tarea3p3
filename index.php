<?php
require 'config.php';

$productos = $pdo->query("SELECT * FROM productos ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <h1>Inventario (SQLite)</h1>

    <a href="agregar.php">Agregar producto</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['precio'] ?></td>
            <td><?= $p['cantidad'] ?></td>
            <td><?= $p['categoria'] ?></td>
            <td>
                <a href="editar.php?id=<?= $p['id'] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
