<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 🍓 - Menú Desplegable</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej01.js" defer></script>
</head>
<body class="ej01-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej01-bar">
            <h1>🍎 Menú Desplegable 🍌</h1>
        </div>
        <p>Haz clic en un elemento para desplegar sus opciones 👇</p>

        <!-- Menú desplegable -->
        <ul class="dropdown-menu">
            <li>
                <a href="#">🍓 Frutas ▼</a>
                <ul class="submenu">
                    <li><a href="#">🍏 Manzana</a></li>
                    <li><a href="#">🍌 Banana</a></li>
                    <li><a href="#">🍒 Cereza</a></li>
                </ul>
            </li>
            <li>
                <a href="#">🥤 Bebidas ▼</a>
                <ul class="submenu">
                    <li><a href="#">💧 Agua</a></li>
                    <li><a href="#">🧃 Jugo</a></li>
                    <li><a href="#">☕ Café</a></li>
                </ul>
            </li>
        </ul>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

</body>
</html>
