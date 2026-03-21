<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro estudiantes</title>
</head>
<body>
    <h1>Agregar un nuevo estudiante</h1>
    <br>
    <form action="guardar_datos_estudiante.php" method="post">
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>