<?php
echo "Hola mundo!!!";
$nombre = "Pepe";
echo "\n" . $nombre;
echo "\n$nombre";
echo '\n$nombre';
$apellido = 'Gomez'; //string
/**
 * BLoque
 * 
 */
$edad = 18;
$promedio = 12.56;
$estado = true; //false 
$numeros = [1, 2, 3, 4, 5, 6];
$numeros = array(1, 2, 3, 4, 5, 6);
// $numeros = new Numeros();
$prueba = null;

function saludar($nombre){
    echo "\n Hola $nombre";
}
saludar("Ana");

function saludar2($nombre){
    return "\nHola $nombre";
}
echo saludar2('Pepe');

//--------------------------------
$categoria = 1;

if($categoria==1){
    //.....
}else if($categoria==2){
    //....
}elseif($categoria==3){
    //....
}else{
    //...
}

/**
 * && and
 * || or
 * ! negacion
 * == igual
 * != diferente
 * < menor que
 * <= menor o igual que
 * > mayor que
 * >= mayor o igual que
 */
switch($categoria){
    case 1:
        //.....
        break;
    case 2:
        //.....
        break;
    case 3:
        //.....
        break;
    default:
        //.....
        break;
}

echo "\n\n";

//ciclos-------------------------


$numeros = [1,2,3,4,5,6,7,8,9,10];
// For
for($index=0; $index<count($numeros);$index++){
    $numero = $numeros[$index];
    if(($numero%2)==0){
        echo "\n $numero es par";
    }else{
        echo "\n $numero es impar";
    }
}
echo "\n\n";
$index = 0;
while($index<count($numeros)){
    $numero = $numeros[$index];
    if(($numero%2)==0){
        echo "\n $numero es par";
    }else{
        echo "\n $numero es impar";
    }
    $index++;
}

echo "\n\n";
$index = 0;
do {
    $numero = $numeros[$index];
    if(($numero%2)==0){
        echo "\n $numero es par";
    }else{
        echo "\n $numero es impar";
    }
    $index++;
} while ($index<count($numeros));

echo "\n\n";
foreach($numeros as $valor){
    if(($valor%2)==0){
        echo "\n $valor es par";
    }else{
        echo "\n $valor es impar";
    }
}

echo "\n\n";
foreach($numeros as $index=>$valor){
    if(($valor%2)==0){
        echo "\n $index: $valor es par";
    }else{
        echo "\n $index: $valor es impar";
    }
}
