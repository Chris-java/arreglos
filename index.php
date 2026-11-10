<?php
session_start();
if (!isset($_POST['mostrar_mayores'])) {
    $numeros = [];
    for ($i = 0; $i < 50; $i++) {
        $numeros[] = rand(1, 100);
    }
    $_SESSION['arreglo'] = $numeros;
} else {
    $numeros = $_SESSION['arreglo'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos en PHP</title>
</head>
<body>
    <h2>Arreglo de 50 números aleatorios:</h2>
    <p><?php echo implode(", ", $numeros); ?></p>
</body>
</html>