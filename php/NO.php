<style>
  #popup123 {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    border: 1px solid #ccc;
    padding: 20px;
    z-index: 9999999999999999;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    background: #ff6a6a;
    border-radius: 50px;
    box-shadow: 0 0 33px 10px red;
    color: aliceblue;
    font-family: sans-serif;
    border: red;

}
#ERROR {
    width: 100%;
    height: 100%;
    background: #ff27001d;
    display: none;
    position: fixed;
    backdrop-filter: blur(4px);
}

    #popup123-content {
      text-align: center;
    }

    #popup123 p {
      margin: 0;
    }

</style>
<div id="ERROR" >
<div id="popup123">
    <div id="popup123-content">
      <p>NO puedes realizar esta acción</p>
    </div>
</div>
</div>

<script>
    // Detectar la presión de la tecla F12 y el clic derecho
window.addEventListener('keydown', function(event) {
  if (event.key === 'F12') {
    event.preventDefault(); // Evitar que se abra la herramienta de desarrollador
    showpopup123();
    // location.reload(); // Refrescar la página
  }
});

window.addEventListener('contextmenu', function(event) {
  event.preventDefault(); // Evitar que se abra el menú contextual
  // showpopup123();
//   location.reload(); 
});

// Función para mostrar la ventana emergente
function showpopup123() {
  var popup123 = document.getElementById('ERROR');
  popup123.style.display = 'block';


  // Opcional: Ocultar la ventana emergente después de un tiempo
  setTimeout(function() {
    popup123.style.display = 'none';
  }, 1000); // 2000 milisegundos = 2 segundos
}

</script>
  