<?php
//include o require (include_once vs require_once)
include 'modelos/numero.php';

if (empty($_POST['numero'])) {
    header("Location: index.php");
}
$numero = $_POST['numero'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Validar Números</title>
</head>

<body>
    <h1>Validar números</h1>
    <a href="index.php">Volver</a>
    <?php
    for ($num = 1; $num <= $numero; $num++) {
        // if (($num % 2) == 0) {
        //     echo "<p>El número $num es par</p>";
        // } else {
        //     echo "<p>El número $num es impar</p>";
        // }
        $numeroObject = new Numero($num);
        echo '<p>' . $numeroObject->validacion() . '</p>';
    }
    ?>
</body>

</html>