
<style>
        .loading-popup {
            display: none; /* Oculto por defecto */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            
        }

        .loading-popup img {
            width: 200px;
            height: 200px;
            filter: drop-shadow(0 0 5px) blur(0.5px);
        }
    </style>
<!-- Popup de carga -->
<div class="loading-popup" id="loading-popup">
    <img src="/img/iconos/loading.gif" alt="Cargando...">
</div>

<script>
    document.querySelectorAll('.seleccion a').forEach(link => {
        link.addEventListener('click', function(event) {
            document.getElementById('loading-popup').style.display = 'flex';
        });
    });

    window.addEventListener('load', function() {
        document.getElementById('loading-popup').style.display = 'none';
    });
</script>
<script>
    document.querySelectorAll('.input2').forEach(link => {
        link.addEventListener('click', function(event) {
            document.getElementById('loading-popup').style.display = 'flex';
        });
    });

    window.addEventListener('load', function() {
        document.getElementById('loading-popup').style.display = 'none';
    });
</script>

