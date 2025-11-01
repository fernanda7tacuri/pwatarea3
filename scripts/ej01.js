document.querySelectorAll('.dropdown-menu > li > a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;

        // Cerrar otros submenús
        document.querySelectorAll('.submenu').forEach(sm => {
            if(sm !== submenu) sm.style.display = 'none';
        });

        // Alternar submenu actual
        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
    });
});
