// Esperamos a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Seleccionamos el div basándonos en su estilo inline
    var divToRemove = document.querySelector('div[style*="position: fixed"][style*="z-index:9999999"][style*="bottom: 0"][style*="right: 1%"]');
    // Verificamos si el div existe
    if (divToRemove) {
        // Ocultamos el div cambiando su estilo display a 'none'
        divToRemove.style.display = 'none';
    }
});