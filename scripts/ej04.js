document.getElementById('adivinanzaForm').addEventListener('submit', function(e){
    e.preventDefault();

    const numeroUsuario = parseInt(document.getElementById('numeroUsuario').value);
    const numeroSecreto = parseInt(document.getElementById('numeroSecreto').value);
    const mensaje = document.getElementById('mensaje');

    if(numeroUsuario === numeroSecreto){
        mensaje.textContent = `🎉 ¡Felicidades! Adivinaste el número ${numeroSecreto} 🎉`;
        mensaje.style.color = '#32cd32'; // verde pastel
    } else if(numeroUsuario < numeroSecreto){
        mensaje.textContent = '⬆️ El número es mayor, intenta de nuevo';
        mensaje.style.color = '#ff6347'; // rojo pastel
    } else {
        mensaje.textContent = '⬇️ El número es menor, intenta de nuevo';
        mensaje.style.color = '#ff6347'; // rojo pastel
    }
});
