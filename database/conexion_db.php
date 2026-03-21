<?php
$host_db = "localhost";
$user_db = "root";
$pwd_db = "";
$name_db = "prueba_db";

$connDb = new mysqli($host_db, $user_db, $pwd_db, $name_db);

if ($connDb->connect_error) {
    die($connDb->connect_error);
}

$sql = "select * from estudiantes";
$stm = $connDb->prepare($sql);
$stm->execute();
$result = $stm->get_result();

if ($result->num_rows == 0) {
    echo "No hay datos";
}
while ($row = $result->fetch_assoc()) {
    echo "id: " . $row['id'];
    echo "nombre: " . $row['nombre'];
    echo "email: " . $row['email'];
    echo '<br>';
}

$connDb->close();
