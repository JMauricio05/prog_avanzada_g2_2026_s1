<?php
$msg = "Hola mundo!!!";
function sumar($val1, $val2)
{
    return $val1 + $val2;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio php</title>
</head>

<body>
    <h1><?php echo $msg; ?></h1>
    <p>Resultado de la suma <?php echo sumar(10, 15); ?></p>
    <br>
    <form action="validar_numero.php" method="post">
        <label>Ingrese un número: </label>
        <input type="number" min="1" name="numero" required>
        <button type="submit">Validar</button>
    </form>
    <br>
    <form action="validar_numeros.php" method="post">
        <label>Ingrese un número: </label>
        <input type="number" min="2" name="numero" required>
        <button type="submit">Enviar</button>
    </form>
    <form action="iniciar_sesion.php" method="post">
        <label>Clave:</label>
        <input type="password" name="pwd" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    session_start();
    if (!empty($_SESSION['nombre'])) {
        echo "<p>Usuario: " . $_SESSION['nombre'] . "</p>";
    }
    ?>

</body>

</html>