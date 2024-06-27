<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="/admin/style.css">
    <style>
        .dashboard {
            background: rgb(14 14 14 / 85%);
            backdrop-filter: blur(15px);
            padding: 20px;
            border-radius: 15px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            min-height: 600px;
            transition: opacity 0.5s ease, transform 0.5s ease;
            opacity: 0;
            transform: scale(0.5);
        }
        .dashboard.enter {
            opacity: 1;
            transform: scale(1);
        }

        .dashboard.fadeOut {
            opacity: 0;
            transform: scale(0.5);
        }
    </style>
</head>
<body>
    
    <div class="produccion">
        <div class="dashboard">
            <div class="greeting">
                <h1>Producciones Leon S.A.S</h1>
                <p>Chat Admin</p>
            </div>
            <div>
                <div id="admin-container">
                    <div id="admin-header">
                        <h2>Chat</h2>
                    </div>
                    <div id="admin-chatbox"></div>
                    <div id="admin-message-container">
                        <input type="text" id="admin-message" placeholder="Escribe un mensaje" onkeydown="sendMessageOnEnter(event)">
                        <button id="admin-sendBtn">Enviar</button>
                    </div>  
                </div>
                <audio id="notification-sound" src="/sound/notificacion.mp3"></audio>
            </div>
        </div>
        <?php require '../../php/menu.php'; ?>
    </div>

    <?php require '../../admin/loading.php'; ?>

    <script>
        // Añadir la clase 'enter' al dashboard al cargar la página para activar la animación de entrada
        window.addEventListener('load', function() {
            document.querySelector('.dashboard').classList.add('enter');
        });

        document.querySelectorAll('.seleccion a').forEach(enlace => {
            enlace.addEventListener('click', function(evento) {
                evento.preventDefault(); // Evitar el comportamiento predeterminado del enlace

                // Agregar la clase de animación
                const dashboard = document.querySelector('.dashboard');
                dashboard.classList.add('fadeOut');

                // Obtener la URL de destino desde el atributo href del enlace
                const url = this.getAttribute('href');

                // Retrasar la redirección por 0.5 segundos para permitir la animación
                setTimeout(function() {
                    window.location.href = url; // Redirigir a la URL después de 0.5 segundos
                }, 500); // 500 milisegundos = 0.5 segundos
            });
        });

        document.querySelector('.search-bar input').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.game-item').forEach(item => {
                const gameName = item.querySelector('p').textContent.toLowerCase();
                if (gameName.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
<script src="/js/chat-admin.js"></script>

</body>
</html>
<?php require '../../php/NO.php'; ?>
