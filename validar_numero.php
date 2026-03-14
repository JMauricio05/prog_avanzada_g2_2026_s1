<?php
// $numero = $_GET['numero'];
if(empty($_POST['numero'])){
    header("Location: index.php");
}
$numero = $_POST['numero'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Validar Número</title>
</head>

<body>
    <h1>Validar Número</h1>
    <?php
    session_start();
    if (!empty($_SESSION['nombre'])) {
        echo "<p>Usuario: " . $_SESSION['nombre'] . "</p>";
    }
    if (($numero % 2) == 0) {
        echo "<p>El número $numero es par</p>";
    } else {
        echo "<p>El número $numero es impar</p>";
    }
    ?>
    <a href="index.php">Volver</a>
</body>

</html>