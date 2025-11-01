document.addEventListener('DOMContentLoaded', () => {
    const counterEl = document.querySelector('.counter h2');
    const target = parseInt(counterEl.textContent); // Número actual de visitas
    let count = 0;

    const increment = Math.ceil(target / 100); // Incremento por frame
    const interval = setInterval(() => {
        count += increment;
        if(count >= target) {
            counterEl.textContent = target + " veces";
            clearInterval(interval);
        } else {
            counterEl.textContent = count + " veces";
        }
    }, 20); // Actualiza cada 20ms
});
