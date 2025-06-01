
(function () {
    let navegacion = document.querySelector('#navegacion');
    let hamburguesa = document.querySelector('#hamburguesa');
    hamburguesa.addEventListener('click', () => {
        navegacion.classList.toggle('abrir');
    });
})()
