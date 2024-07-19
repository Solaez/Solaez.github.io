<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Producciones Leon</title>
    <link rel="icon" href="/1pagina civil/img/iconos/LOGO hd.png">
    <!--Setilos-->
    <link rel="stylesheet" href="/1pagina civil/css/header-bar.css">
    <link rel="stylesheet" href="/1pagina civil/css/nav-slider.css">
    <link rel="stylesheet" href="/1pagina civil/css/section.css">
    <link rel="stylesheet" href="/1pagina civil/css/article.css">
    <link rel="stylesheet" href="/1pagina civil/css/footer.css">
    <link rel="stylesheet" href="/1pagina civil/css/whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/1pagina civil/css/sitio-prod.css">
    <link rel="stylesheet" href="/1pagina civil/css/pedir-producto.css">
    <link rel="stylesheet" href="/css/chat.css">
    <!-- <link rel="stylesheet" href="/css/loader.css"> -->
    <!--fin-->
</head>
<body >
  
  <!--Header Barra de navegación-->
  <?php require '../../1pagina civil/src/header.php'; ?>

  <!--Contenido de la pagina-->
  <div class="container-productos">
    
  <div class="sidebar-productos">
    <div class="categories-menu">
        <h3>Categorías</h3>

        <ul class="submovil">
          <li>
            <a href="#" data-category="all"><p>Categorias ▾</p></a>
            <ul class="submenu">
              <li><a href="#todos-los-productos" class="active" data-category="all" id="all">Todos los productos</a></li>
            <li>
              <a href="#" data-category="all">Estado ▾</a>
              <ul class="submenu">
                  <li><a href="#Nuevo" data-category="nuevo" id="nuevo">• Nuevo</a></li>
                  <li><a href="#Promocion" data-category="promocion" id="ofertas">• Ofertas</a></li>
                  <li><a href="#Destacados" data-category="destacados" id="destacados">• Destacados</a></li>
              </ul>
          </li>
            <li><a href="#Acesorios"  data-category="acesorio" id="acesorios">Acesorios</a></li>
            <li>
                <a href="#Ropa" data-category="ropa">Ropa ▾</a>
                <ul class="submenu">
                    <li><a href="#Camisa" data-category="camisas" id="camisas">• Camisas</a></li>
                    <li><a href="#Camibuso" data-category="camibuso" id="camibusos">• Camibusos</a></li>
                    <li><a href="#Busos" data-category="busos" id="busos">• Busos</a></li>
                    <li><a href="#Pantalones" data-category="pantalone" id="pantalones">• Pantalones</a></li>
                    <li><a href="#Tennis" data-category="tennis" id="tennis">• Tennis</a></li>
                </ul>
            </li>
            <li><a href="#Bolsos"  data-category="bolsos" id="bolsos">Bolsos</a></li>
            <li>
                <a href="#" data-category="all">Banderas ▾</a>
                <ul class="submenu">
                    <li><a href="#Banderas-exteriores" data-category="exteriore" id="banderase">• Banderas Exteriores</a></li>
                    <li><a href="#Banderas-interiores" data-category="interiore" id="banderasi">• Banderas Interiores</a></li>
                    <li><a href="#Banderines" data-category="banderine" id="banderines">• Banderines</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-category="all">Estampados ▾</a>
                <ul class="submenu">
                    <li><a href="#Estampados" data-category="estampados" id="estampados">• Estampados y más</a></li>
                    <li><a href="#Personalizados" data-category="personalizado" id="personalizados">• Personalizados</a></li>
                </ul>
            </li>
            <li>
                <a href="#gorras" data-category="gorras">Gorras ▾</a>
                <ul class="submenu">
                    <li><a href="#Gorras" data-category="gorra" id="gorras">• Gorras</a></li>
                    <li><a href="#Casco" data-category="casco" id="cascos">• Casco</a></li>
                    <li><a href="#Boinas" data-category="boina" id="boinas">• Boinas</a></li>
                    <li><a href="#Pavas" data-category="pava" id="pavas">• Pavas</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-category="all">Seguridad ▾</a>
                <ul class="submenu">
                    <li><a href="#Ejercito-policia" data-category="policia" id="policia">• Ejercito y policia</a></li>
                    <li><a href="#Personal-rescate" data-category="rescate" id="rescate">• Personal de rescate</a></li>
                    <li><a href="#Seguridad-privada" data-category="privada" id="privada">• Seguridad privada</a></li>
                    <li><a href="#Seguridad-vial" data-category="vial" id="vial">• Seguridad vial</a></li>
                </ul>
            </li>
            <li><a href="#Insignias-Parches"  data-category="insignia" id="insignias">Insignias y Parches</a></li>
            </ul>
        </li>
        </ul>

        <ul class="subpc">
            <li><a href="#todos-los-productos" class="active" data-category="all" id="all">Todos los productos</a></li>
            <li>
              <a href="#" data-category="all">Estado ▾</a>
              <ul class="submenu">
                  <li><a href="#Nuevo" data-category="nuevo" id="nuevo">• Nuevo</a></li>
                  <li><a href="#Promocion" data-category="promocion" id="ofertas">• Ofertas</a></li>
                  <li><a href="#Destacados" data-category="destacados" id="destacados">• Destacados</a></li>
              </ul>
          </li>
            <li><a href="#Acesorios"  data-category="acesorio" id="acesorios">Acesorios</a></li>
            <li>
                <a href="#Ropa" data-category="ropa">Ropa ▾</a>
                <ul class="submenu">
                    <li><a href="#Camisa" data-category="camisas" id="camisas">• Camisas</a></li>
                    <li><a href="#Camibuso" data-category="camibuso" id="camibusos">• Camibusos</a></li>
                    <li><a href="#Busos" data-category="busos" id="busos">• Busos</a></li>
                    <li><a href="#Pantalones" data-category="pantalone" id="pantalones">• Pantalones</a></li>
                    <li><a href="#Tennis" data-category="tennis" id="tennis">• Tennis</a></li>
                </ul>
            </li>
            <li><a href="#Bolsos"  data-category="bolsos" id="bolsos">Bolsos</a></li>
            <li>
                <a href="#" data-category="all">Banderas ▾</a>
                <ul class="submenu">
                    <li><a href="#Banderas-exteriores" data-category="exteriore" id="banderase">• Banderas Exteriores</a></li>
                    <li><a href="#Banderas-interiores" data-category="interiore" id="banderasi">• Banderas Interiores</a></li>
                    <li><a href="#Banderines" data-category="banderine" id="banderines">• Banderines</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-category="all">Estampados ▾</a>
                <ul class="submenu">
                    <li><a href="#Estampados" data-category="estampados" id="estampados">• Estampados y más</a></li>
                    <li><a href="#Personalizados" data-category="personalizado" id="personalizados">• Personalizados</a></li>
                </ul>
            </li>
            <li>
                <a href="#gorras" data-category="gorras">Gorras ▾</a>
                <ul class="submenu">
                    <li><a href="#Gorras" data-category="gorra" id="gorras">• Gorras</a></li>
                    <li><a href="#Casco" data-category="casco" id="cascos">• Casco</a></li>
                    <li><a href="#Boinas" data-category="boina" id="boinas">• Boinas</a></li>
                    <li><a href="#Pavas" data-category="pava" id="pavas">• Pavas</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-category="all">Seguridad ▾</a>
                <ul class="submenu">
                    <li><a href="#Ejercito-policia" data-category="policia" id="policia">• Ejercito y policia</a></li>
                    <li><a href="#Personal-rescate" data-category="rescate" id="rescate">• Personal de rescate</a></li>
                    <li><a href="#Seguridad-privada" data-category="privada" id="privada">• Seguridad privada</a></li>
                    <li><a href="#Seguridad-vial" data-category="vial" id="vial">• Seguridad vial</a></li>
                </ul>
            </li>
            <li><a href="#Insignias-Parches"  data-category="insignia" id="insignias">Insignias y Parches</a></li>
        </ul>

    </div>
    </div>
    <!-- <div class="sidebar-productos">
      <div class="categories-menu">
          <h3>Categorías</h3>
          <ul>
              <li><a href="#todos-los-productos" class="active" data-category="all" id="all">Todos los productos</a></li>
              <li>
                <a href="#" data-category="all">Estado ▾</a>
                <ul class="submenu">
                    <li><a href="#Nuevo" data-category="nuevo" id="nuevo">• Nuevo</a></li>
                    <li><a href="#Promocion" data-category="promocion" id="ofertas">• Ofertas</a></li>
                    <li><a href="#Destacados" data-category="destacados" id="destacados">• Destacados</a></li>
                </ul>
            </li>
              <li><a href="#Acesorios"  data-category="acesorio" id="acesorios">Acesorios</a></li>
              <li>
                  <a href="#Ropa" data-category="ropa">Ropa ▾</a>
                  <ul class="submenu">
                      <li><a href="#Camisa" data-category="camisas" id="camisas">• Camisas</a></li>
                      <li><a href="#Camibuso" data-category="camibuso" id="camibusos">• Camibusos</a></li>
                      <li><a href="#Busos" data-category="busos" id="busos">• Busos</a></li>
                      <li><a href="#Pantalones" data-category="pantalone" id="pantalones">• Pantalones</a></li>
                      <li><a href="#Tennis" data-category="tennis" id="tennis">• Tennis</a></li>
                  </ul>
              </li>
              <li><a href="#Bolsos"  data-category="bolsos" id="bolsos">Bolsos</a></li>
              <li>
                  <a href="#" data-category="all">Estampados ▾</a>
                  <ul class="submenu">
                      <li><a href="#Estampados" data-category="estampados" id="estampados">• Estampados y más</a></li>
                      <li><a href="#Personalizados" data-category="personalizado" id="personalizados">• Personalizados</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#gorras" data-category="gorras">Gorras ▾</a>
                  <ul class="submenu">
                      <li><a href="#Gorras" data-category="gorra" id="gorras">• Gorras</a></li>
                      <li><a href="#Casco" data-category="casco" id="cascos">• Casco</a></li>
                      <li><a href="#Boinas" data-category="boina" id="boinas">• Boinas</a></li>
                      <li><a href="#Pavas" data-category="pava" id="pavas">• Pavas</a></li>
                  </ul>
              </li>
              <li><a href="#Insignias-Parches"  data-category="insignia" id="insignias">Insignias y Parches</a></li>
          </ul>
      </div>
  </div> -->

  
    <div class="content-productos">
        <nav class="buscadorproductos">
            <nav>
                <a class="active">Productos</a>
            </nav>
            <div class="search-icons">
                <div class="search-icons">
                    <input type="text" placeholder="Buscar ">
                </div>
              </nav>
            <div class="categories">
                <a href="#productos" data-category="all" id="all" >Todos</a>
                <a href="#" data-category="camisas" id="camisas">Camisas</a>
                <a href="#" data-category="busos" id="busos">Busos</a>
                <a href="#" data-category="bordados" id="bordados">Bordados</a>
                <a href="#" data-category="casco" id="cascos">Casco</a>
            </div>
            <main>
              <div  id="product-details" style="display: none;">
                  <button id="regresar-btn">Regresar</button>
                  <button id="pedir-producto">Pedir producto</button>
              </div>
              <div id="product-grid">

                  <!-- Productos -->
                  <!-- <div id="B001" class="product" data-category="bolsos,promocion" >
                                      
                                      <span class="span-nuevo">Promoción!</span>
                                      <img src="/1pagina militar/img/productos/bolso/bolso miltitar viajero/principal.png" alt="bolso" >
                                      <h3 class="titleproductos">Bolso militar, Bolsa de Viaje, con Correas de Mochila Extraíbles</h3>
                                      <a href="#CB001"><button >Seleccionar</button></a>
                                      <div id="product-details"  style="display: none;">
                                          <img class="imag1" src="/1pagina militar/img/productos/bolso/bolso miltitar viajero/principal.png" alt="cami1">
                                          <img class="imag2" src="/1pagina militar/img/productos/bolso/bolso miltitar viajero/1.png" alt="cami2">
                                          <img class="imag3" src="/1pagina militar/img/productos/bolso/bolso miltitar viajero/2.png" alt="cami3">
                                      </div>
                                      <div id="product-details" style="display: none;">
                                          <p class="descripcion">
                                            Esta gran bolsa de deporte militar está hecha de tela de poliéster 600D resistente con cremallera resistente n.º 10 y hebillas de calidad en toda la bolsa para su uso en condiciones difíciles. Ideal como bolsa de deporte, bolsa de despliegue, bolsa de carga táctica, bolsa de carga, bolsa de viaje. para hombres, etc...
                                            Esta enorme bolsa de viaje de estilo militar puede satisfacer todas sus necesidades de viajes, deportes o actividades al aire libre. Un compartimento principal de carga superior con cremallera y 6 bolsillos externos para un acceso rápido. El compartimento principal es de aproximadamente 82L. 6 bolsillos exteriores aproximadamente 6 L. Dimensiones totales: 94 cm de ancho x 38 cm de profundidad x 28 cm de altura.
                                            Las asas de transporte están hechas de todas las correas resistentes de 5 cm o de uso duradero y de transporte cómodo. 2 asas grandes reforzadas en cada lado para transportar y mover cargas pesadas. O dos personas mueven la bolsa pesada agarrando cada mango. Parte inferior de cuero artificial duradera y fácil de limpiar con patas de goma.
                                            Correas acolchadas extraíbles estilo mochila y panel superior para un transporte cómodo. Cuando las correas están sueltas, más cómodo de usar y llevar como bolsa de deporte.
                                            Esta gran mochila de estilo militar tiene el equilibrio adecuado entre calidad y dinero. En caso de insatisfacción, puede devolverlo en cualquier momento.
                                          </p>
                                          <p class="tipo">Bolso</p>
                                          <p class="lugar">Sede principal</p>
                                          <p class="precio">$160.000</p>
                                          <p class="precio2">$90.000</p>
                                      </div>
                                    </div>

                                    <div id="CB002" class="product" data-category="ropa,camibuso">
                                      <img src="/1pagina militar/img/productos/camisa/amarilla/camisa2.png" alt="Camisa militar" >
                                      <h3 class="titleproductos">Camisa militar amarilla</h3>
                                      <a href="#CB002"><button>Seleccionar</button></a>
                                      <div id="product-details"  style="display: none;">
                                          <img class="imag1" src="/1pagina militar/img/productos/camisa/amarilla/camisa2.png" alt="cami1">
                                          <img class="imag2" src="/1pagina militar/img/productos/camisa/amarilla/camisa1.png" alt="cami2">
                                          <img class="imag3" src="/1pagina militar/img/productos/camisa/amarilla/camisa3.png" alt="cami3">
                                      </div>
                                      <div id="product-details" style="display: none;">
                                          <p class="descripcion">la descripcion va aqui1</p>
                                          <p class="tipo">el tipo va aqui 2</p>
                                          <p class="lugar">el lugar esta en cierto lugar 3</p>
                                          <p class="precio"></p>
                                          <p class="precio2"></p>
                                      </div>
                                    </div> -->
                                      
                  <?php
                  require '../../php/baseDatos.php';

                  $conn = new mysqli($servername, $username, $password, $dbname);

                  if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                  }
                  ?>
                                    <?php
                  // Query para obtener productos
                  $sql = "SELECT * FROM productos";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // Iterar sobre cada fila de resultados
                    while($row = $result->fetch_assoc()) {
                      // Aquí se genera el HTML para cada producto
                      echo '<div id="' . $row['id_producto'] . '" class="product" data-category="' . $row['categorias'] . ',' . $row['estado'] . '">';
                      // 
                      echo '<span class="span-nuevo">' . $row['estado'] . '</span>';
                      echo '<img src="' . $row['imagen1'] . '" alt="' . $row['nombre'] . '" >';
                      echo '<h3 class="titleproductos">' . $row['nombre'] . '</h3>';
                      echo '<a href="#' . $row['id_producto'] . '"><button>Seleccionar</button></a>';
                      echo '<div id="product-details" style="display: none;">';
                      echo '<img class="imag1" src="' . $row['imagen2'] . '" alt="imagen1">';
                      echo '<img class="imag2" src="' . $row['imagen3'] . '" alt="imagen2">';
                      echo '<img class="imag3" src="' . $row['imagen4'] . '" alt="imagen3">';
                      echo '</div>';
                      echo '<div id="product-details" style="display: none;">';
                      echo '<p class="descripcion" >' . $row['descripcion'] . '</p>';
                      echo '<p class="tipo">' . $row['tipo'] . '</p>';
                      echo '<p class="lugar">' . $row['lugar'] . '</p>';
                      echo '<p class="precio">' . $row['precio'] . '</p>';
                      echo '<p class="precio2">' . $row['precio2'] . '</p>';
                      echo '</div>';
                      echo '</div>';
                    }
                  } else {
                    echo "0 resultados";
                  }
                  $conn->close();
                  ?>

                  
                </div>
                <div id="pagination"></div>
            </main>
    </div>
  </div> 

  <!--pedir producto-->
  <article>
    <div id="popup" class="popup">
      <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <h2>Comprar producto</h2>
        <p>¿Estás seguro de que desea comprar el producto?</p>
        <center><img src="/1pagina civil/img/iconos/producto.png"></center>
        <a id="whatsappLink" href="#"><button id="buyButton">Pedir Producto</button></a>
        <img src="" alt=""  >
      </div>
    </div>
  </article>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const buyButton = document.getElementById('buyButton');
      
      buyButton.addEventListener('click', function() {
        const currentPageUrl = window.location.href;
        const phoneNumber = "+573008645571";
        const text = `Me interesa adquirir este producto, ¿Podrías proporcionarme información sobre su precio? ${currentPageUrl}`;
        
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        var whatsappLink;
        
        if (isMobile) {
          whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
        } else {
          whatsappLink = `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(text)}`;
        }
        
        document.getElementById('whatsappLink').href = whatsappLink;
      });
    });
  </script>




  <!--Mensajes-->
  <?php require '../../1pagina civil/src/help.php'; ?>

  <!--Whatsapp-->
  <?php require '../../1pagina civil/src/whatsapp.php'; ?>

  <!--footer-->
  <?php require '../../1pagina civil/src/footer.php'; ?>








  <!--Scripts-->
  <script src="/js/chat.js"></script>
  <!--PRODUCTOS
------------------------------------------------------------------------------------------------------->
<script src="/1pagina civil/js/id-productos.js"></script>
<!-- <script src="/js/loader.js"></script> -->
<script src="/1pagina civil/js/header-bar.js"></script>
<script src="/1pagina civil/js/article.js"></script>
<script src="/1pagina civil/js/whatsapp.js"></script>
<script src="/1pagina civil/js/sitio-prod.js"></script>
<script>
  // Obtener el contenedor de detalles del producto
  const productDetails = document.getElementById('product-details');

  // Función para mostrar los detalles del producto seleccionado
  function showProductDetails(event) {
      const product = event.target.closest('.product');
      const title = product.querySelector('h3').textContent;
      const image = product.querySelector('img').src;
      const description = product.querySelector('.descripcion').textContent;
      const tipo = product.querySelector('.tipo').textContent;
      const lugar = product.querySelector('.lugar').textContent;
      const precio = product.querySelector('.precio').textContent;
      const precio2 = product.querySelector('.precio2').textContent;
      const imag1 = product.querySelector('.imag1').src;
      const imag2 = product.querySelector('.imag2').src;
      const imag3 = product.querySelector('.imag3').src;

      // Limpiar el contenido anterior del contenedor de detalles
      productDetails.innerHTML = '';

      // Crear el contenido HTML para mostrar los detalles del producto

// Crear el contenido HTML para mostrar los detalles del producto
let precioHTML = '';


if (precio || precio2) {
    precioHTML = `<p id="ubicacionProducto"><b>Precio:</b><del> ${precio}</del> - ${precio2}</p>`;
}

      const productHTML = `
      <a href="#Productos"><button id="regresar-btn"><img class="mario" src="/1pagina civil/img/iconos/volver.png" alt="volver"></button></a>

    <div class="detallesproductosmargen" id="producto-container">
    <div class="fotos">
        <img id="product1" src="${imag1}" onclick="changeMainImage(this.src)">
        <img id="product2" src="${imag2}" onclick="changeMainImage(this.src)">
        <img id="product3" src="${imag3}" onclick="changeMainImage(this.src)">
    </div>
    <img id="productoImagen" src="${image}" alt="${title}" onclick="showEnlargedImage(this.src)">
    <div class="descripcion">
        <h2 id="titleProducto">${title}</h2>
        <p id="tipoProducto"><b>Tipo:</b> ${tipo}</p>
        <p id="ubicacionProducto"><b>Ubicación:</b> ${lugar}</p>
        ${precioHTML}
        <button id="pedir-producto" onclick="showPopup()">Pedir producto</button>
    </div>
</div>
    <div>
        <h3 id="descripcionProducto2">Descripción del producto</h3>
        <p id="descripcionProducto">${description.replace(/\n/g, '<br>')}</p>
    </div>
`;

      // Agregar el contenido HTML al contenedor de detalles
      productDetails.innerHTML = productHTML;

      // Mostrar el contenedor de detalles con la animación de entrada
      productDetails.style.display = 'block';
      productDetails.classList.remove('slide-out');

      // Ocultar la cuadrícula de productos
      const productGrid = document.getElementById('product-grid');
      productGrid.style.display = 'none';

      // Agregar evento de clic al botón "Regresar"
      const regresarBtn = document.getElementById('regresar-btn');
      regresarBtn.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          // Después de que la animación de salida finalice, oculta el contenedor de detalles y muestra la cuadrícula de productos
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
  }

  // Función para cambiar la imagen principal
  function changeMainImage(imageSrc) {
      const mainImage = document.getElementById('productoImagen');
      mainImage.src = imageSrc;
  }

  // Función para mostrar la imagen ampliada
  function showEnlargedImage(imageSrc) {
      const enlargedImageContainer = document.createElement('div');
      enlargedImageContainer.style.position = 'fixed';
      enlargedImageContainer.style.top = '0';
      enlargedImageContainer.style.left = '0';
      enlargedImageContainer.style.width = '100%';
      enlargedImageContainer.style.height = '100%';
      enlargedImageContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
      enlargedImageContainer.style.display = 'flex';
      enlargedImageContainer.style.justifyContent = 'center';
      enlargedImageContainer.style.alignItems = 'center';
      enlargedImageContainer.style.zIndex = '9999';
      enlargedImageContainer.style.opacity = '0'; // Inicialmente oculta
      enlargedImageContainer.style.transition = 'opacity 0.3s ease'; // Animación de entrada
      enlargedImageContainer.style.backdropFilter = 'blur(5px)'; // Agregar el backdrop-filter

      const enlargedImage = document.createElement('img');
      enlargedImage.src = imageSrc;
      enlargedImage.style.maxWidth = '90%';
      enlargedImage.style.maxHeight = '90%';
      enlargedImage.style.transform = 'scale(0.8)'; // Escala inicial
      enlargedImage.style.transition = 'transform 0.3s ease'; // Animación de entrada

      enlargedImageContainer.appendChild(enlargedImage);
      document.body.appendChild(enlargedImageContainer);

      // Mostrar la imagen ampliada con animación
      setTimeout(() => {
          enlargedImageContainer.style.opacity = '1';
          enlargedImage.style.transform = 'scale(1)';
      }, 10); // Retraso para evitar parpadeo

      // Agregar evento de clic para cerrar la imagen ampliada con animación
      enlargedImageContainer.addEventListener('click', () => {
          enlargedImageContainer.style.opacity = '0';
          enlargedImage.style.transform = 'scale(0.8)';

          // Eliminar el contenedor después de la animación de salida
          setTimeout(() => {
              document.body.removeChild(enlargedImageContainer);
          }, 300); // Duración de la animación
      });
  }

  // Función para mostrar el popup
  function showPopup() {
      document.getElementById('popup').style.display = 'block';
  }

  // Obtener los botones "Seleccionar" y agregar el evento de clic
  const selectButtons = document.querySelectorAll('.product button');
  selectButtons.forEach(button => {
      button.addEventListener('click', showProductDetails);
  });

</script>
<script>
  // Obtener el input de búsqueda y el contenedor de productos
  const searchInput = document.querySelector('.search-icons input');
  const productGrid = document.getElementById('product-grid');

  // Función para filtrar los productos por título
  function filterProductsByTitle(query) {
      const products = productGrid.querySelectorAll('.product');
      const lowercaseQuery = query.toLowerCase();

      products.forEach(product => {
          const title = product.querySelector('h3').textContent.toLowerCase();
          if (title.includes(lowercaseQuery)) {
              product.style.display = 'block';
          } else {
              product.style.display = 'none';
          }
      });

      // Actualizar la paginación después de filtrar los productos
      const visibleProducts = Array.from(products).filter(product => product.style.display !== 'none');
      renderPagination(visibleProducts);
      showProducts(1, visibleProducts);
      updateActivePage(1);
  }

  // Event listener para el input de búsqueda al presionar Enter
  searchInput.addEventListener('keydown', event => {
      if (event.key === 'Enter') {
          const searchQuery = event.target.value.trim();
          filterProductsByTitle(searchQuery);
      }
  });
</script>
<!--productos-->
<script>
  //1 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO1') {
      const selectButton = document.querySelector('.product[id="CB001"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //2 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO2') {
      const selectButton = document.querySelector('.product[id="CB002"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //3 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO3') {
      const selectButton = document.querySelector('.product[id="CB003"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //4 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO4') {
      const selectButton = document.querySelector('.product[id="B001"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //5 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO5') {
      const selectButton = document.querySelector('.product[id="C001"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //6 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO6') {
      const selectButton = document.querySelector('.product[id="BD001"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //7 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO7') {
      const selectButton = document.querySelector('.product[id="BD002"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //8 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO8') {
      const selectButton = document.querySelector('.product[id="BD003"] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //9 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO') {
      const selectButton = document.querySelector('.product[id=" "] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
  //10 producto de inicio
  window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'PRODUCTO') {
      const selectButton = document.querySelector('.product[id=" "] button');
      if (selectButton) {
        selectButton.click();
      }
    }
  });
</script>
<!--barra de navegacion-->
<script>
  //boinas
    window.addEventListener('DOMContentLoaded', () => {
    const urlFragment = window.location.hash.slice(1);
    if (urlFragment === 'acesorio') {
      const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="acesorio"]');
      if (categoriesMenuLink) {
        categoriesMenuLink.click();
      }
    }
  });
  
  //camisas
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'camisas') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="camisas"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
  //pantalones
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'pantalone') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="pantalone"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
  //estanpado
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'estampados') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="estampados"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
  //camisabusos
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'camibuso') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="camibuso"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//cascos
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'cascos') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="casco"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});

//bordados
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'bordados') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="bordados"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//insignia
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'insignia') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="insignia"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//Promocion
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'promocion') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="promocion"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//destacados
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'destacados') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="destacados"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//gorras
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'gorra') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="gorra"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//pava
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'pava') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="pava"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//boinas
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'boina') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="boina"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});
//boinas
  window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment === 'bolsos') {
    const categoriesMenuLink = document.querySelector('.categories-menu a[data-category="bolsos"]');
    if (categoriesMenuLink) {
      categoriesMenuLink.click();
    }
  }
});

</script>
<!--popup-->
<script>
  
  document.getElementById('pedir-producto').addEventListener('click', function() {
document.getElementById('popup').style.display = 'block';
});

document.getElementById('closePopup').addEventListener('click', function() {
document.getElementById('popup').style.display = 'none';
});

document.getElementById('buyButton').addEventListener('click', function() {
// Aquí puedes añadir la lógica para comprar el producto
alert('¡Te estamos enviando a un empleado para hacer tu compra!');
});

</script>
<!--Fin-->
</body>
</html>

  <!--cursor-->
  <?php require '../../1pagina militar/src/cursor.php'; ?>


