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
// Operadores de comparación
$x = 10;
$y = "10";

// Igualdad estricta
if ($x === $y) {
    echo "$x es igual a $y en valor y tipo<br>";
} else {
    echo "$x no es igual a $y en valor o tipo<br>";
}

// Distinto estricto
if ($x !== $y) {
    echo "$x no es igual a $y en valor o tipo<br>";
} else {
    echo "$x es igual a $y en valor y tipo<br>";
}

// Mayor o igual que
$z = 5;
if ($z >= $x) {
    echo "$z es mayor o igual que $x<br>";
} else {
    echo "$z no es mayor o igual que $x<br>";
}

// Operadores lógicos
$condicion1 = true;
$condicion2 = false;

// AND lógico
if ($condicion1 && $condicion2) {
    echo "Ambas condiciones son verdaderas<br>";
} else {
    echo "Al menos una de las condiciones no es verdadera<br>";
}

// OR lógico
if ($condicion1 || $condicion2) {
    echo "Al menos una de las condiciones es verdadera<br>";
} else {
    echo "Ninguna de las condiciones es verdadera<br>";
}

// Concatenación de cadenas
$nombre = "Juan";
$apellido = "Pérez";

$nombre_completo = $nombre . " " . $apellido;
echo "El nombre completo es: $nombre_completo<br>";

// Otra forma de concatenación
$edad = 30;
$mensaje = "La edad de " . $nombre . " es " . $edad;
echo $mensaje;
?>

</body>
</html>