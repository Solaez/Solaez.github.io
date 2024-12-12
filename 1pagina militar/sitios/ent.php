<!DOCTYPE html>
<html lang="es">

<s>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entregas - Producciones Leon</title>
  <link rel="icon" href="/1pagina militar/img/iconos/LOGO hd.png">
  <!--Setilos-->
  <link rel="stylesheet" href="/1pagina militar/css/header-bar.css">
  <link rel="stylesheet" href="/1pagina militar/css/nav-slider.css">
  <link rel="stylesheet" href="/1pagina militar/css/section.css">
  <link rel="stylesheet" href="/1pagina militar/css/article.css">
  <link rel="stylesheet" href="/1pagina militar/css/footer.css">
  <link rel="stylesheet" href="/1pagina militar/css/whatsapp.css">
  <link rel="stylesheet" href="/css/chat.css">
  <!--fin-->
  <style>
    .entregas {
      width: 300px;
      background: #eeeeeeb8;
      border-radius: 30px;
      border: outset;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      text-align-last: center;
      border-color: #ffffff1f;
    }

    .fondo-acer {
      padding: 15px 20px 20px;
      border-radius: 10px;
      margin: 10px 60px;
      background-color: #ffffff;
      animation: fadeIn 2s ease forwards;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: center;
    }

    img.entregasImg {
      border-radius: 15px;
      scale: 1.2;
    }

    .fondo-acer p {
      text-align: justify;
      font-size: 20px;
      color: #585858;
      margin-left: 0;
    }
  </style>
</s>


<body>

  <!--Header Barra de navegación-->
  <?php require '../../1pagina militar/src/header.php'; ?>

  <!--Acerca de nosotros -->
  <article>
    <h1 class="title-acer">Entragas</h1>

    <div class="fondo-acer">
      <div class="entregas">
        <p>Caicedonia, Valle del Cauca</p>
        <img class="entregasImg" src="https://web.archive.org/web/20230329161513im_/https://www.produccionesleon.com/wp-content/uploads/a0da7485-37cc-4c95-bf65-b6c3a82e6bbf-300x300.jpg" alt="">
      </div>
      <div class="entregas">
        <p>Dolores, Tolima</p>
        <img class="entregasImg" src="https://web.archive.org/web/20230329161513im_/https://www.produccionesleon.com/wp-content/uploads/WhatsApp-Image-2021-07-03-at-11.49.00-AM-300x300.jpeg" alt="">
      </div>
      <div class="entregas">
        <p>Victoria, Caldas</p>
        <img class="entregasImg" src="https://web.archive.org/web/20230329161513im_/https://www.produccionesleon.com/wp-content/uploads/WhatsApp-Image-2021-07-14-at-9.27.34-AM-300x300.jpeg" alt="">
      </div>
      <div class="entregas">
        <p>SENA Regional Santander</p>
        <img class="entregasImg" src="https://web.archive.org/web/20230329161513im_/https://www.produccionesleon.com/wp-content/uploads/WhatsApp-Image-2021-08-21-at-9.46.15-AM-300x300.jpeg" alt="">
      </div>
    </div>

  </article>


  <!--Mensajes-->
  <?php require '../../1pagina militar/src/help.php'; ?>

  <!--Whatsapp-->
  <?php require '../../1pagina militar/src/whatsapp.php'; ?>

  <!--footer-->
  <?php require '../../1pagina militar/src/footer.php'; ?>

  <!--Scripts-->
  <script src="/js/chat.js"></script>
  <script src="/1pagina militar/js/header-bar.js"></script>
  <script src="/1pagina militar/js/article.js"></script>
  <script src="/1pagina militar/js/whatsapp.js"></script>
  <!--Fin-->

</body>

</html>


<!--cursor-->
<?php require '../../1pagina militar/src/cursor.php'; ?>