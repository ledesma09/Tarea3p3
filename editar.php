<?php
require 'config.php';

$id = $_GET['id'];
$producto = $pdo->query("SELECT * FROM productos WHERE id = $id")->fetch();

if ($_POST) {
    $stmt = $pdo->prepare("UPDATE productos 
                           SET nombre=?, precio=?, cantidad=?, categoria=?
                           WHERE id=?");

    $stmt->execute([
        $_POST['nombre'],
        $_POST['precio'],
        $_POST['cantidad'],
        $_POST['categoria'],
        $id
    ]);

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Editar producto</title>
<link rel="stylesheet" href="estilos.css">

</head>
<body>
<h1>Editar producto</h1>

<form method="POST">
    Nombre: <input name="nombre" value="<?= $producto['nombre'] ?>"><br><br>
    Precio: <input name="precio" value="<?= $producto['precio'] ?>"><br><br>
    Cantidad: <input name="cantidad" value="<?= $producto['cantidad'] ?>"><br><br>
    Categoría: <input name="categoria" value="<?= $producto['categoria'] ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>
</body>
</html>