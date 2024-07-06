<?php
$name = "Manuel";
$edad = 18;
$booleano = false;
$arreglo = [1, 2, 3, 4, 5];
$objeto = 

//var_dump($arreglo);

//constante global
define('LOGO_URL', 'https://w7.pngwing.com/pngs/185/655/png-transparent-logo-php-computer-icons-symbol-miscellaneous-emblem-text.png');

//constante local
const NOMBRE = "Miguel";

//Para detectar las variables, deben usarse comillas dobles. 
$output = "Hola $name, con una edad de $edad";

//condicional
if($booleano) {
    echo "Es verdadero";
} else {
    echo $arreglo[0];
}

//condicional con match
$outputAge = match (true) {
    $edad < 2     => "Eres un bebe",
    $edad < 10    => "Eres un muchacho",
    $edad <18     => "Eres un adolescente",
    $edad === 18  => "Eres mayor de edad",
    default       => "Eres un adulto",
}


?>

<h1><?= $output ?></h1>

<h1><?= $outputAge ?></h1>

<!-- cancatenar -->
<h2><?= $name . " Paez" ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200px">








<style>
    :root {
        color-scheme: light-dark;
    }

    body {
        display: grid;
        place-content: center;
        background: black;
        color: white; 
    }
</style>