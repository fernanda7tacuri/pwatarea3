document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita enviar el formulario

    // Campos
    const nombre = document.getElementById('nombre');
    const email = document.getElementById('email');
    const mensaje = document.getElementById('mensaje');

    // Errores
    let valid = true;

    // Reset errores
    document.getElementById('errorNombre').textContent = '';
    document.getElementById('errorEmail').textContent = '';
    document.getElementById('errorMensaje').textContent = '';

    // Validación nombre
    if(nombre.value.trim() === '') {
        document.getElementById('errorNombre').textContent = 'Por favor ingresa tu nombre';
        valid = false;
    }

    // Validación email
    if(email.value.trim() === '') {
        document.getElementById('errorEmail').textContent = 'Por favor ingresa tu correo';
        valid = false;
    } else if(!/^\S+@\S+\.\S+$/.test(email.value)) {
        document.getElementById('errorEmail').textContent = 'Correo no válido';
        valid = false;
    }

    // Validación mensaje
    if(mensaje.value.trim() === '') {
        document.getElementById('errorMensaje').textContent = 'Por favor ingresa un mensaje';
        valid = false;
    }

    // Si es válido, mostrar mensaje de éxito
    if(valid) {
        alert('✅ Formulario enviado correctamente, ' + nombre.value + '!');
        nombre.value = '';
        email.value = '';
        mensaje.value = '';
    }
});
