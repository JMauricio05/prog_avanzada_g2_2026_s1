<?php
require __DIR__ . '/../models/config/model_base.php';
require __DIR__ . '/../models/entities/estudiante.php';
require __DIR__ . '/../models/config/connection_db.php';
require __DIR__ . '/../models/queries/estudiantes_query.php';
require __DIR__ . '/../controllers/estudiantes_controller.php';

use app\controllers\EstudiantesController;

$controller = new EstudiantesController();
$lista = $controller->getListaEstudiantes();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../public/css/index.css">
</head>

<body>
    <h1>Lista de estudiantes</h1>
    <br>
    <a href="registro_estudiantes.php">Registrar estudiantes</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($lista) == 0) {
                echo '<tr><td colspan="3">No hay datos</td></tr>';
            } else {
                foreach ($lista as $item) {
                    echo '<tr>';
                    echo '  <td>' . $item->get('id') . '</td>';
                    echo '  <td>' . $item->get('nombre') . '</td>';
                    echo '  <td>' . $item->get('email') . '</td>';
                    echo '  <td>';
                    echo '      <a href="modificar_estudiante.php?cod=' . $item->get('id') . '">Modificar</a>';
                    echo '      <a href="borrar_estudiante.php?cod=' . $item->get('id') . '">Eliminar</a>';
                    echo '  </td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>