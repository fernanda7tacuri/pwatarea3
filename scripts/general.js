// scripts/general.js

// Referencias al modal
const modal = document.getElementById('modal');
const modalContent = document.getElementById('modal-content');
const closeModal = document.getElementById('close-modal');

// Función para abrir ejercicios dentro del modal
function abrirEjercicio(archivo) {
  fetch(archivo)
    .then(response => {
      if (!response.ok) throw new Error("No se pudo cargar el archivo");
      return response.text();
    })
    .then(data => {
      modalContent.innerHTML = data;
      modal.style.display = "block";

      // Detectar y cargar el script del ejercicio automáticamente
      const scriptTag = data.match(/<script\s+src="([^"]+)"/);
      if (scriptTag && scriptTag[1]) {
        const script = document.createElement("script");
        script.src = scriptTag[1];
        script.defer = true;
        document.body.appendChild(script);
      }
    })
    .catch(error => {
      modalContent.innerHTML = `<p style="color:red;">Error al cargar ${archivo}</p>`;
      modal.style.display = "block";
    });
}

// Cerrar modal al hacer clic en la X
closeModal.addEventListener('click', () => {
  modal.style.display = "none";
  modalContent.innerHTML = "";
});

// Cerrar modal al hacer clic fuera del cuadro
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
    modalContent.innerHTML = "";
  }
});
