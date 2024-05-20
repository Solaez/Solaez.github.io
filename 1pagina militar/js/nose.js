document.addEventListener('DOMContentLoaded', function() {
    // Leer el parámetro de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const categoria = urlParams.get('categoria');

    // Si el parámetro es "camisas", activar el filtro correspondiente
    if (categoria === 'camisas') {
        // Simplemente establece la clase "active" en el enlace de camisas para resaltarlo
        const enlaceCamisas = document.querySelector('a[data-category="camisas"]');
        enlaceCamisas.classList.add('active'); // Esto es opcional, solo si deseas resaltar el enlace de camisas visualmente
    }
});
