<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Producciones Leon</title>
  <link rel="icon" href="/img/iconos/LOGO hd.png">
  <style>
    body {
      background: url("/img/fondo/fondo2.png");
      background-size: cover;
      display: flex;
      justify-content: center;
      margin: 5%;
    }

    .login {
      width: 340px;
      height: 400px;
      background: #000000b5;
      padding: 47px;
      padding-bottom: 57px;
      color: #fff;
      border-radius: 17px;
      padding-bottom: 50px;
      font-size: 1.3em;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      backdrop-filter: blur(8px);
      box-shadow: 0 0 20px black;
    }

    .login input[type="text"],
    .login input[type="password"] {
      opacity: 1;
      display: block;
      border: none;
      outline: none;
      width: 90%;
      padding: 13px 18px;
      margin: 20px 0 0 0;
      font-size: 0.8em;
      border-radius: 100px;
      background: #3c3c3c;
      color: #fff;
    }

    .login input:focus {
      animation: bounce 1s;
    }

    .login input[type=submit],
    .login input[type=button],
    .h1 {
      border: 0;
      outline: 0;
      width: 100%;
      padding: 13px;
      margin: 40px 0 0 0;
      border-radius: 500px;
      font-weight: 600;
      animation: bounce2 1.6s;
    }

    .h1 {
      padding: 0;
      position: relative;
      top: -35px;
      display: block;
      margin-bottom: -0px;
      font-size: 1.3em;
    }

    .btn {
      background: linear-gradient(144deg, #af40ff, #5b42f3 50%, #00ddeb);
      color: #fff;
      padding: 16px !important;
    }

    .btn:hover {
      background: linear-gradient(144deg, #1e1e1e, 20%, #1e1e1e 50%, #1e1e1e);
      color: rgb(255, 255, 255);
      padding: 16px !important;
      cursor: pointer;
      transition: all 0.4s ease;
    }

    .login input[type=text] {
      animation: bounce 1s;
    }

    .login input[type=password] {
      animation: bounce1 1.3s;
    }

    .ui {
      font-weight: bolder;
      background: -webkit-linear-gradient(#B563FF, #535EFC, #0EC8EE);
      -webkit-text-fill-color: transparent;
      border-bottom: 4px solid transparent;
      border-image: linear-gradient(0.25turn, #535EFC, #0EC8EE, #0EC8EE);
      border-image-slice: 1;
      display: inline;
    }

    @media only screen and (max-width: 600px) {
      .login {
        width: 70%;
        padding: 2em;
      }
    }

    @keyframes bounce {
      0% {
        transform: translateY(-250px);
        opacity: 0;
      }
    }

    @keyframes bounce1 {
      0% {
        opacity: 0;
      }

      40% {
        transform: translateY(-100px);
        opacity: 0;
      }
    }

    @keyframes bounce2 {
      0% {
        opacity: 0;
      }

      70% {
        transform: translateY(-20px);
        opacity: 0;
      }
    }

    .regresar {
      display: flex;
      background: transparent;
      border: transparent;
      color: #fff;
      font-size: 40px;
      position: absolute;
      top: 10px;
      left: 10px;
      cursor: pointer;
      transition: transform .2s, background-color .2s;
      border-radius: 50px;
      z-index: 9;
      animation: bounce 3s;
    }

    .regresar:hover {
      transform: scale(1.1);
      background-color: #2e2e2e;
    }

    .fondoblur {
      background-color: #1e1e1ea8;
      width: 100%;
      height: 100%;
      top: 0;
      position: absolute;
      border: transparent;
      backdrop-filter: blur(5px);
      opacity: 0;
      transition: opacity .5s;
      z-index: -5;
    }

    .regresar:hover+.fondoblur {
      opacity: 100;
      z-index: 2;
    }
  </style>

  <script>
    async function handleSubmit(event) {
      event.preventDefault();
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      const response = await fetch('/php/login.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
      });

      const result = await response.json();
      if (result.success) {
        window.location.href = '/admin/index.php';
      } else {
        alert(result.message);
      }
    }
  </script>
  
</head>

<body>
  <div class="login wrap">
    <div class="h1">Iniciar Sección</div>
    <form onsubmit="handleSubmit(event)">
      <input placeholder="Usuario" id="email" name="email" type="text" required>
      <input placeholder="Contraseña" id="password" name="password" type="password" required>
      <input value="Iniciar Sección" class="btn" type="submit">
    </form>
  </div>
  <a href="/index.php" class="regresar"><button class="regresar">↩</button></a>
  <button class="fondoblur"></button>
</body>

</html>