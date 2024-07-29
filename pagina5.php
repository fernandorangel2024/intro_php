<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Ejemplo de instrucción if
$temperatura = 25;

if ($temperatura > 30) {
    echo "Hace mucho calor<br>";
} elseif ($temperatura >= 20 && $temperatura <= 30) {
    echo "El clima es agradable<br>";
} else {
    echo "Hace frío<br>";
}

// Ejemplo de instrucción if-else anidada
$numero = 15;

if ($numero % 2 == 0) {
    echo "$numero es un número par<br>";
} else {
    if ($numero % 3 == 0) {
        echo "$numero es divisible por 3 pero no es par<br>";
    } else {
        echo "$numero no es divisible ni por 2 ni por 3<br>";
    }
}

// Ejemplo de instrucción if-else con operador ternario
$hora = date("H");
$mensaje = ($hora < 12) ? "Buenos días" : "Buenas tardes o noches";
echo "$mensaje<br>";
?>
</body>
</html>