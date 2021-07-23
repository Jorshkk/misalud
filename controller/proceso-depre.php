<?php
echo "<h1> Estamos analizando los resultados... </h1>";
$pregunta1 = $_POST['pregunta_1'];
$pregunta2 = $_POST['pregunta_2'];
$pregunta3 = $_POST['pregunta_3'];
$pregunta4 = $_POST['pregunta_4'];
$pregunta5 = $_POST['pregunta_5'];
$pregunta6 = $_POST['pregunta_6'];
$valorP1 = 0;
$valorP2 = 0;
$valorP3 = 0;
$valorP4 = 0;
$valorP5 = 0;
$valorP6 = 0;

//Con switch se recuperan las respuestas de la pregunta y se les asigna un valor acorde a lo ingresado


switch ($pregunta1) {
    case '1':
        $valorP1 = 3;
        break;
    case '2':
        $valorP1 = 6;
        break;
    case '3':
        $valorP1 = 9;
        break;
    case '4':
        $valorP1 = 10;
        break;
}

switch ($pregunta2) {
    case '1':
        $valorP2 = 3;
        break;
    case '2':
        $valorP2 = 6;
        break;
    case '3':
        $valorP2 = 9;
        break;
    case '4':
        $valorP2 = 10;
        break;
}
switch ($pregunta3) {
    case '1':
        $valorP3 = 3;
        break;
    case '2':
        $valorP3 = 6;
        break;
    case '3':
        $valorP3 = 9;
        break;
    case '4':
        $valorP3 = 10;
        break;
}

switch ($pregunta4) {
    case '1':
        $valorP4 = 3;
        break;
    case '2':
        $valorP4 = 6;
        break;
    case '3':
        $valorP4 = 9;
        break;
    case '4':
        $valorP4 = 10;
        break;
}

switch ($pregunta5) {
    case '1':
        $valorP5 = 3;
        break;
    case '2':
        $valorP5 = 6;
        break;
    case '3':
        $valorP5 = 9;
        break;
    case '4':
        $valorP5 = 10;
        break;
}

switch ($pregunta6) {
    case '1':
        $valorP6 = 3;
        break;
    case '2':
        $valorP6 = 6;
        break;
    case '3':
        $valorP6 = 9;
        break;
    case '4':
        $valorP6 = 10;
        break;
}
// Fin control valor por seleccion

//Ahora para dar con el valor final y dar el diagnostico final se sumaran los valores finales

$resultado = ($valorP1 +
    $valorP2 +
    $valorP3 +
    $valorP4 +
    $valorP5 +
    $valorP6);

if ($resultado <= 20) {
    header("refresh:5;url=../view/template/depresion/estado-depre-positivo.php");
    //echo "oa";
} elseif ($resultado >= 21 && $resultado <= 42) {
    header("refresh:5;url=../view/template/depresion/estado-depre-medio.php");
} elseif ($resultado >= 43 ) {
    header("refresh:5;url=../view/template/depresion/estado-depre-alto.php");
}
