// JS opcional: limpiar mensaje al cambiar input
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('loginForm');
    const mensaje = document.getElementById('mensaje');

    if(mensaje) {
        form.addEventListener('input', () => {
            mensaje.textContent = '';
        });
    }
});
