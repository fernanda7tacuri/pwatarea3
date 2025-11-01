<?php
session_start();

// Generar número aleatorio si no existe
if(!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 10); // número entre 1 y 10
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 🎲 - Juego de Adivinanzas</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej04.js" defer></script>
</head>
<body class="ej04-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej04-bar">
            <h1>🎲 Juego de Adivinanzas 🎯</h1>
        </div>
        <p>Intenta adivinar el número entre 1 y 10 👇</p>

        <!-- Formulario de adivinanza -->
        <form id="adivinanzaForm">
            <input type="number" id="numeroUsuario" min="1" max="10" placeholder="🔢 Ingresa un número" required />
            <button type="submit">Adivinar 🎯</button>
        </form>

        <!-- Mensaje de resultado -->
        <p id="mensaje"></p>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

    <!-- Número secreto en un input hidden -->
    <input type="hidden" id="numeroSecreto" value="<?php echo $_SESSION['numero']; ?>">
</body>
</html>
