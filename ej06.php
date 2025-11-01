<?php
session_start();

// Arreglo de usuarios (usuario => contraseña)
$usuarios = [
    "admin" => "1234",
    "usuario1" => "abcd",
    "fernanda" => "pass123"
];

$mensaje = "";

// Validar login al enviar el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if(isset($usuarios[$username]) && $usuarios[$username] === $password) {
        $_SESSION['usuario'] = $username;
        // Redirigir correctamente usando Location:
        header("Location: https://pwapractica3.gt.tc/?i=1"); 
        exit();
    } else {
        $mensaje = "❌ Usuario o contraseña incorrectos. Intenta de nuevo";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 🔐 - Sistema de Login</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="scripts/ej06.js" defer></script>
</head>
<body class="ej06-bg">

    <div class="container">
        <!-- Franja de título -->
        <div class="title-bar ej06-bar">
            <h1>🔐 Sistema de Login 👤</h1>
        </div>
        <p>Introduce tu usuario y contraseña 👇</p>

        <!-- Formulario de login -->
        <form id="loginForm" method="POST" action="ej06.php">
            <input type="text" name="username" placeholder="👤 Usuario" required />
            <input type="password" name="password" placeholder="🔑 Contraseña" required />
            <button type="submit">Entrar 🚪</button>
        </form>

        <!-- Mensaje -->
        <?php if($mensaje): ?>
            <p id="mensaje"><?php echo $mensaje; ?></p>
        <?php endif; ?>

        <!-- Botón volver -->
        <p><a href="index.php" class="back-btn">⬅ Volver al menú principal</a></p>
    </div>

</body>
</html>
