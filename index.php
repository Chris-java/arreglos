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
    <style>
        body {
            color: #d8b4fe;
            font-family: Arial, sans-serif;
        }

        button {
            color: #7b4de7;
            background: #f8e5f2;
            border: none;
            padding: 6px 10px;
        }
    </style>
</head>
<body>
    <h2>Arreglo de 50 números aleatorios:</h2>
    <p><?php echo implode(", ", $numeros); ?></p>

    <form method="POST">
        <button type="submit" name="mostrar_mayores">Mostrar los 3 números más grandes</button>
    </form>

    <?php
    if (isset($_POST['mostrar_mayores'])) {
        $copia = $numeros;
        rsort($copia);
        $tres_mayores = array_slice($copia, 0, 3);
        echo "<h3>Los tres números más grandes son:</h3>";
        echo "<p>" . implode(", ", $tres_mayores) . "</p>";
    }
    ?>
</body>
</html>