<?php
require __DIR__ . '/../models/config/model_base.php';
require __DIR__ . '/../models/entities/estudiante.php';
require __DIR__ . '/../models/config/connection_db.php';
require __DIR__ . '/../models/queries/estudiantes_query.php';
require __DIR__ . '/../controllers/estudiantes_controller.php';

use app\controllers\EstudiantesController;

$controller = new EstudiantesController();

$id = $_GET["cod"];
$estudiante = $controller->getEstudiante($id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos del estudiantes</title>
</head>
<body>
    <h1>Modificar datos del estudiante</h1>
    <br>
    <form action="guardar_datos_estudiante.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo $estudiante->get('nombre');?>" required>
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email" value="<?php echo $estudiante->get('email');?>" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>