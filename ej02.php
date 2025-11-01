<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 ✉️ - Formulario de Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej02.js" defer></script>
</head>
<body class="ej02-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej02-bar">
            <h1>✉️ Formulario de Contacto 📬</h1>
        </div>
        <p>Rellena tus datos y envía tu mensaje 👇</p>

        <!-- Formulario -->
        <form id="contactForm" novalidate>
            <div class="form-group">
                <input type="text" id="nombre" placeholder="👤 Nombre" />
                <span class="error" id="errorNombre"></span>
            </div>

            <div class="form-group">
                <input type="email" id="email" placeholder="📧 Correo Electrónico" />
                <span class="error" id="errorEmail"></span>
            </div>

            <div class="form-group">
                <textarea id="mensaje" rows="5" placeholder="📝 Mensaje"></textarea>
                <span class="error" id="errorMensaje"></span>
            </div>

            <button type="submit">📤 Enviar</button>
        </form>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

</body>
</html>
