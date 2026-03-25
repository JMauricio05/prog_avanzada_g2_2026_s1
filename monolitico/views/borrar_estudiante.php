<?php
require __DIR__ . '/../models/config/model_base.php';
require __DIR__ . '/../models/entities/estudiante.php';
require __DIR__ . '/../models/config/connection_db.php';
require __DIR__ . '/../models/queries/estudiantes_query.php';
require __DIR__ . '/../controllers/estudiantes_controller.php';

use app\controllers\EstudiantesController;

$controller = new EstudiantesController();
$id = $_GET['cod'];

$estado = $controller->borrarEstudiante($id);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos guardado</title>
</head>

<body>
    <h1>Resultado de operación</h1>
    <?php
    if ($estado) {
        echo '<p>Datos del estudiante borrados.</p>';
    } else {
        echo '<p>Error al borrar los datos.</p>';
    }
    ?>

    <a href="lista_estudiantes.php">Volvar a lista</a>
</body>

</html>