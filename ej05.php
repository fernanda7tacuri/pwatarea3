<?php
// Carpeta donde están las imágenes
$carpeta = "imagenes/";
$imagenes = glob($carpeta . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 🖼️ - Galería de Imágenes</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej05.js" defer></script>

</head>
<body class="ej05-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej05-bar">
            <h1>🖼️ Galería de Imágenes 🌸</h1>
        </div>
        <p>Explora las imágenes haciendo hover sobre ellas 👇</p>

        <!-- Galería -->
        <div class="galeria">
            <?php foreach($imagenes as $img): ?>
                <div class="imagen">
                    <img src="<?php echo $img; ?>" alt="Imagen">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

</body>
</html>
