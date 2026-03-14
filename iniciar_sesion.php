<?php
if (empty($_POST['pwd'])) {
    header("Location: index.php");
}
$pwd = $_POST['pwd'];
session_start();
if ($pwd == '12345') {
    $_SESSION['nombre'] = "Ana";
    header("Location: index.php");
} else {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <p>Clave incorrecta</p>
    <a href="index.php">Volver</a>
</body>

</html>