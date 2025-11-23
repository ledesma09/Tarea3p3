<?php
require 'config.php';

if ($_POST) {
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, cantidad, categoria)
                           VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nombre'],
        $_POST['precio'],
        $_POST['cantidad'],
        $_POST['categoria']
    ]);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Agregar</title>
<link rel="stylesheet" href="estilos.css">

</head>

<body>
<h1>Agregar producto</h1>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Precio: <input type="number" step="0.01" name="precio" required><br><br>
    Cantidad: <input type="number" name="cantidad" required><br><br>
    Categoría: <input type="text" name="categoria"><br><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>
