<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producciones Leon S.A.S</title>
    <link rel="icon" href="/img/iconos/LOGO hd.png">
    <link rel="stylesheet" href="/css/logo.css">
    <style>
        .login-admin{
            position: fixed;
            z-index: 999;
            right: 0;
            bottom: 0;
            background: transparent;
            cursor: pointer;
            transition: transform .2s;
            margin: 10px;
        }
        .login-admin:hover{
            transform: scale(1.1);
        }
    </style>
</head>
<body >
    <audio id="audio" src="/sound/logo.mp3" autoplay></audio>
    
    <div  id="logo-container">
        <img id="logo" src="/img/iconos/LOGO hd2.png" alt="Logo">
    </div>

    <div class="contenido">
        <div class="cuerpo">
            <div class="contenedor2">
            <div class="militar-cuerpo">
                <div class="relleno-izquierdo">
                <h2 class="titulo-boton">Militar</h2>
                <button onclick="reproducirAudioEntrar()" class="boton-militar">Elegir Militar</button>
                </div>
            </div>
            </div>
            <div class="contenedor3">
            <div class="civil-cuerpo">
                <div class=" relleno-derecho">
                <h2 class="titulo-boton">Civil</h2>
                <button onclick="reproducirAudioEntrar()" class="boton-civil">Elegir Civil</button >
                </div>
            </div>
            </div>
        </div>
        <a href="/login.php"><button class="login-admin"><img src="https://img.icons8.com/fluency/48/user-male-circle--v1.png" alt="login"></button></a>

    </div>
    <script>
        const logo = document.getElementById('logo');
        const contenido = document.querySelector('.contenido');

        // Desaparecer el logo lentamente después de 4 segundos
        setTimeout(() => {
            logo.style.animation = 'fadeOut-logo 1.5s ease-in-out forwards';
        }, 2000);

        // Mostrar el contenido después de 3 segundos
        setTimeout(() => {
            contenido.style.display = 'block';
        }, 3000);
        const militarBtn = document.querySelector('.boton-militar');
        const civilBtn = document.querySelector('.boton-civil');
        const militarImg = document.querySelector('.militar-cuerpo');
        const civilImg = document.querySelector('.civil-cuerpo');
        const militarRellenoIzq = document.querySelector('.relleno-izquierdo');
        const civilRellenoDer = document.querySelector('.relleno-derecho');
        militarBtn.addEventListener('click', () => {
        // Invertir animaciones
        militarImg.style.animation = 'slideOutLeft 0.5s ease-out forwards';
        civilImg.style.animation = 'slideOutRight 0.5s ease-out forwards';
        militarRellenoIzq.style.animation = 'ySlideDown 1s ease-out forwards';
        civilRellenoDer.style.animation = 'ySlideUp 1s ease-out forwards';
        // Redirección después de 5 segundos
        setTimeout(() => {
            window.location.href ='/1pagina militar/sitios/inicio.php';
        }, 1000);
        });
        civilBtn.addEventListener('click', () => {
        // Invertir animaciones
        militarImg.style.animation = 'slideOutLeft 0.5s ease-out forwards';
        civilImg.style.animation = 'slideOutRight 0.5s ease-out forwards';
        militarRellenoIzq.style.animation = 'ySlideDown 1s ease-out forwards';
        civilRellenoDer.style.animation = 'ySlideUp 1s ease-out forwards';
        // Redirección después de 5 segundos
        setTimeout(() => {
            window.location.href ='/1pagina civil/sitios/inicio.php';
        }, 1000);
        });
    </script>
</body>
</html>

<!--cursor-->
<div class="cursor-container">
    <div class="cursor"></div>
    <link rel="stylesheet" href="/css/cursor.css">
    <script src="/js/cursor.js"></script>