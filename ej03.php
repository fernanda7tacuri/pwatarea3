<?php
// Archivo para guardar el número de visitas
$archivo = "contador.txt";

// Verifica si el archivo existe, si no lo crea
if(!file_exists($archivo)){
    file_put_contents($archivo, 0);
}

// Lee el número actual de visitas
$visitas = (int)file_get_contents($archivo);

// Incrementa el contador
$visitas++;

// Guarda el nuevo valor
file_put_contents($archivo, $visitas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 👀 - Contador de Visitas</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej03.js" defer></script>
</head>
<body class="ej03-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej03-bar">
            <h1>👀 Contador de Visitas 🖱️</h1>
        </div>
        <p>Esta página ha sido visitada:</p>

        <!-- Contador -->
        <div class="counter">
            <h2><?php echo $visitas; ?> veces</h2>
        </div>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

</body>
</html>
