// Detectar la presión de la tecla F12 y el clic derecho
window.addEventListener('keydown', function(event) {
    if (event.key === 'F12') {
      event.preventDefault(); // Evitar que se abra la herramienta de desarrollador
      alert('Eso no se puede');
      location.reload(); // Refrescar la página
    }
  });
  
  window.addEventListener('contextmenu', function(event) {
    event.preventDefault(); // Evitar que se abra el menú contextual
    alert('Eso no se puede');
    location.reload(); // Refrescar la página
  });
  