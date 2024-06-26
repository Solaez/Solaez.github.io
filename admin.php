<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/iconos/LOGO hd.png">
    <title>Admin-Chat Producciones León</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
            background-image: url('/img/fondo/fondo.jpg');
            background-size: cover;
            /* background-repeat: no-repeat; */
            background-position: center;

        }

        #admin-container {
            width: 600px;
            height: 500px;
            margin: 50px auto;
            background-color: #89898917;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(4px);
            box-shadow: 0 0 19px;
        }

        #admin-header {
            background-color: #00ff5700;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            box-shadow: 0 12px 13px rgb(0, 0, 0, .2);
        }

        #admin-header h2 {
            margin: 0;
            font-size: 18px;
        }

        #admin-chatbox {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .message {
            max-width: 70%;
            padding: 8px 12px;
            margin: 5px 0;
            border-radius: 18px;
            font-size: 14px;
            word-wrap: break-word;
        }

        .message .username {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .message.user {
            background-color: #00550ba9;
            color: #fff;
            align-self: flex-end;
            border-bottom-right-radius: 0;
        }

        .message.service {
            background-color: #ffffffa8;
            backdrop-filter: blur(20px);
            color: #3f3f3f;
            align-self: flex-start;
            border-bottom-left-radius: 0;
        }

        #admin-message-container {
            display: flex;
            padding: 10px;
            /* background-color: #f0f2f500; */
            border-top: 2px solid #ffffff38;
        }

        #admin-message {
            flex: 1;
            padding: 8px 12px;
            border: none;
            border-radius: 18px;
            font-size: 14px;
            outline: none;
            background-color: #ffffff73;
        }

        #admin-sendBtn {
            background-color: #006f02;
            color: #fff;
            border: none;
            border-radius: 18px;
            font-size: 14px;
            padding: 8px 16px;
            cursor: pointer;
            margin-left: 10px;
            transition: transform .2s;
        }

        #admin-sendBtn:hover {
            transform: scale(1.1);
        }

        #admin-sendBtn:active {
            transform: scale(1);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #admin-container {
            animation: fadeIn 0.5s ease-in-out;
        }

        @media screen and (max-width: 680px) {
            #admin-container {
                width: 100%;
            }

        }
        
    .regresar{
      display: flex;
      background: transparent;
      border: transparent;
      color: #fff;
      font-size: 40px;
      position: absolute;
      top: 10px;
      left: 10px;
      cursor: pointer;
      transition: transform .2s,background-color .2s;
      border-radius: 50px;
      z-index: 9;
      animation: bounce 3s;

    }
    .regresar:hover{
      transform: scale(1.1);
      background-color: #2e2e2e;
    }
    .fondoblur{
      background-color: #1e1e1ea8;
      width: 100%;
      height: 100%;
      top: 0;
      position: absolute;
      border: transparent;
      backdrop-filter: blur(5px);
      /* display: none; */
      opacity: 0;
      transition: opacity .5s;
      z-index: -5;
    }
    .regresar:hover + .fondoblur{
      opacity: 100;
      z-index: 2;
    }
    </style>
</head>

<body>
    <div id="admin-container">
        <div id="admin-header">
            <h2>Admin Chat</h2>
        </div>
        <div id="admin-chatbox"></div>
        <div id="admin-message-container">
            <input type="text" id="admin-message" placeholder="Escribe un mensaje"
                onkeydown="sendMessageOnEnter(event)">
            <button id="admin-sendBtn">Enviar</button>
        </div>  
    </div>
    <audio id="notification-sound" src="/sound/notificacion.mp3"></audio>

    <a href="/index.php" class="regresar"><button class="regresar">↩</button></a>
    <button class="fondoblur"></button>
    <a href="/1pagina militar/add/ingresar_productos.php"><button>Agregar producto - militar</button></a>
    <a href="/1pagina militar/add/listar_productos.php"><button>Modificar producto - militar</button></a>
<script src="/js/chat-admin.js"></script>
</body>

</html>
