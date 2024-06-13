<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producciones Leon</title>
    <link rel="icon" href="/img/iconos/LOGO hd.png">
    <!--Setilos-->
    <link rel="stylesheet" href="/1pagina civil/css/header-bar.css">
    <link rel="stylesheet" href="/1pagina civil/css/nav-slider.css">
    <link rel="stylesheet" href="/1pagina civil/css/section.css">
    <link rel="stylesheet" href="/1pagina civil/css/article.css">
    <link rel="stylesheet" href="/1pagina civil/css/footer.css">
    <link rel="stylesheet" href="/1pagina civil/css/whatsapp.css">
    <link rel="stylesheet" href="/1pagina civil/css/loader.css">
    <link rel="stylesheet" href="/css/chat.css">
    <!--fin-->
</head>
<body>
   
  <!--Header Barra de navegación-->
  <?php require '../../1pagina civil/src/header.php'; ?>

  <!--Imagenes de paso sliter-->
  <nav>
      <div id="slider">
          <div class="slides">
            <div class="slider">
              <div class="legend"></div>
              <div class="content">
                <div class="content-txt">
                  <h1>Mejores precios</h1>
                  <h2>Súper precios en tus <br>artículos favoritos.</h2>
                  <a href="/1pagina civil/sitios/prod.php">
                  <button class="inicio-boton">
                    Ver mas detalles
                  </button></a>
                </div>
              </div>
              <div class="image">
                <img src="/1pagina civil/img/imagenes/slite/slite1.webp">
              </div>
            </div>
            <div class="slider">
              <div class="legend"></div>
              <div class="content">
                <div class="content-txt">
                  <h1>Somos fabricantes</h1>
                  <h2>Expertos en artículos militares, bordados, impresión DTF, sublimación y calandra.</h2>
                </div>
              </div>
              <div class="image">
                <img src="/1pagina civil/img/imagenes/slite/slite4.png">
              </div>
            </div>
      </div>
        
  </nav>

  <!--marcas trabajadas-->
  <article>
    <div class="cuerpo">
      <div><img src="/1pagina civil/img/imagenes/instituciones/2.png" alt=""></div>
    </div>
  </article>

  <!--Productos de inicio-->
  <article>
    <div class="productos-home">
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
      <div class="produc-home"><img  src="/1pagina civil/img/productos/camisa/CS001/1.webp" alt="produc"><button>ver</button></div>
    </div>
  </article>

  <article>
    <div class="quiernesSomos">
      <div class="quiernesT"><center><h1>¿Quienes somos?</h1></center></div>
      <div class="quienesD">
        Somos fabricantes y ofrecemos una amplia variedad de parches bordados,<br>
        tanto militares como civiles, para todo tipo de prendas, como guerreras,<br>
          gorras y chaquetas, entre otros. La empresa vende ropa tanto para uso <br> 
          militar como civil, satisfaciendo las necesidades de <br>
          profesionales del sector y aficionados.</div>
      <div class="quienesB"><a href="/1pagina civil/sitios/acer.php"><button>Ver mas detalles</button></a></div>

    </div>
    <div>
      <img src="/1pagina civil/img/imagenes/fortalezas/1.png" alt="" style="width: 70%; max-width: 100rem; margin-top: 50px; ">
    </div>
  </article>

  <!--Articulos de venta inicio-->
  <article>
      
    <div class="carousel-container">
    <h2 class="title-produc">Productos más destacados</h2>
      <div class="carousel">
        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/camisa/negro/camisa3.png" alt="Product 1" onload="hideLoader(this)">
          <h3>Producto 1</h3>
          <p class="description">Descripción del Producto 1</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO1" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>
        
        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/camisa/camisa roja/camisa 1.png" alt="Product 2">
          <h3>Producto 2</h3>
          <p class="description">Descripción del Producto 2</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO3" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/cascos/casco1/casco1.png" alt="Product 3">
          <h3>Producto 3</h3>
          <p class="description">Descripción del Producto 3</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO5" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/camisa/amarilla/camisa2.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO2" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>

        </div>
        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/bordados/bordado circulo/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO6" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/bordados/bordado figura/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO7" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/bordados/bordado triangulo/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO8" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <img src="/1pagina civil/img/productos/busos/buso.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO4" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>
        <!-- Agrega más elementos según sea necesario -->
      </div>
      <button class="prev" onclick="prevSlide(); resetTimer()">❮</button>
      <button class="next" onclick="nextSlide(); resetTimer()">❯</button>
      
    <a href="/1pagina civil/sitios/prod.php#destacados"><button class="ver-mas-venta">
      <img src="https://img.icons8.com/fluency-systems-filled/48/checkout.png">
    </button></a>
    </div>
    
    

  </article>

  <!--Ofertas de ventas inicio-->
  <article>
      
    <div class="carousel-container">
    <h2 class="title-produc">¡Ofertas Especiales!</h2>
      <div class="carousel2">
        <div class="carousel-item">
          <span class="ofer-sticker">¡Oferta!</span>
          <img src="/1pagina civil/img/productos/camisa/negro/camisa3.png" alt="Product 1" onload="hideLoader(this)">
          <h3>Producto 1</h3>
          <p class="description">Descripción del Producto 1</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO1" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>
        
        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/camisa/camisa roja/camisa 1.png" alt="Product 2">
          <h3>Producto 2</h3>
          <p class="description">Descripción del Producto 2</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO3" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">¡Oferta!</span>
          <img src="/1pagina civil/img/productos/cascos/casco1/casco1.png" alt="Product 3">
          <h3>Producto 3</h3>
          <p class="description">Descripción del Producto 3</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO5" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/camisa/amarilla/camisa2.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO2" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>

        </div>
        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/bordados/bordado circulo/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO6" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/bordados/bordado figura/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO7" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/bordados/bordado triangulo/bordado1.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO8" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>

        <div class="carousel-item">
          <span class="ofer-sticker">Oferta</span>
          <img src="/1pagina civil/img/productos/busos/buso.png" alt="Product 4">
          <h3>Producto 4</h3>
          <p class="description">Descripción del Producto 4</p>
          <a href="/1pagina civil/sitios/prod.php#PRODUCTO4" id="redirigir-btn">
            <button class="boton-ver-inicio">Comprar</button>
          </a>
        </div>
        <!-- Agrega más elementos según sea necesario -->
      </div>
      <button class="prev" onclick="prevSlide2(); resetTimer2()">❮</button>
      <button class="next" onclick="nextSlide2(); resetTimer2()">❯</button>

      <a href="/1pagina civil/sitios/prod.php#promocion">
      <button class="ver-mas-venta">
      <img src="https://img.icons8.com/fluency-systems-filled/48/checkout.png">
    </button></a>
    </div>
    
    

  </article>

  <!--Mensajes-->
  <?php require '../../1pagina civil/src/help.php'; ?>

  <!--Whatsapp-->
  <?php require '../../1pagina civil/src/whatsapp.php'; ?>

  <!--footer-->
  <?php require '../../1pagina civil/src/footer.php'; ?>

<!--Scripts-->
<script src="/js/chat.js"></script>
<script src="/1pagina civil/js/loader.js"></script>
<script src="/1pagina civil/js/header-bar.js"></script>
<script src="/1pagina civil/js/article.js"></script>
<script src="/1pagina civil/js/whatsapp.js"></script>

<!--Fin-->
</body>
</html>

  <!--cursor-->
  <?php require '../../1pagina militar/src/cursor.php'; ?>