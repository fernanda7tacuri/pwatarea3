document.addEventListener('DOMContentLoaded', () => {
    const imagenes = document.querySelectorAll('.galeria .imagen img');

    // Crear modal
    const modal = document.createElement('div');
    modal.id = 'modalGaleria';
    modal.style.display = 'none';
    modal.style.position = 'fixed';
    modal.style.top = 0;
    modal.style.left = 0;
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'rgba(0,0,0,0.8)';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    modal.style.zIndex = 1000;
    modal.innerHTML = `<img src="" alt="" style="max-width:90%; max-height:80%; border-radius:15px;">`;
    document.body.appendChild(modal);

    const modalImg = modal.querySelector('img');

    imagenes.forEach(img => {
        img.addEventListener('click', () => {
            modal.style.display = 'flex';
            modalImg.src = img.src;
        });
    });

    // Cerrar modal al hacer clic
    modal.addEventListener('click', () => {
        modal.style.display = 'none';
    });
});
