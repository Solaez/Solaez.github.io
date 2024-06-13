<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Producciones Leon</title>
    <link rel="icon" href="/1pagina militar/img/iconos/LOGO hd.png">
    <!--Setilos-->
    <link rel="stylesheet" href="/1pagina militar/css/header-bar.css">
    <link rel="stylesheet" href="/1pagina militar/css/nav-slider.css">
    <link rel="stylesheet" href="/1pagina militar/css/section.css">
    <link rel="stylesheet" href="/1pagina militar/css/article.css">
    <link rel="stylesheet" href="/1pagina militar/css/footer.css">
    <link rel="stylesheet" href="/1pagina militar/css/whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/1pagina militar/css/sitio-prod.css">
    <link rel="stylesheet" href="/1pagina militar/css/pedir-producto.css">
    <link rel="stylesheet" href="/css/chat.css">
    <!-- <link rel="stylesheet" href="/css/loader.css"> -->
    <!--fin-->
</head>
<body >
  
    <!--Header Barra de navegación-->
    <?php require '../../1pagina militar/src/header.php'; ?>


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
      <center><img src="/1pagina militar/img/iconos/producto.png"></center>
      <a id="whatsappLink" href="#"><button id="buyButton">Pedir Producto</button></a>
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
    <?php require '../../1pagina militar/src/help.php'; ?>

    <!--Whatsapp-->
    <?php require '../../1pagina militar/src/whatsapp.php'; ?>
    
    <!--footer-->
    <?php require '../../1pagina militar/src/footer.php'; ?>


<!-- Scripts para leer Excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script>
        function leerExcel() {
            const url = '/1pagina militar/add/productos.xlsx';
            fetch(url)
                .then(response => response.arrayBuffer())
                .then(data => {
                    const workbook = XLSX.read(data, { type: 'array' });
                    const sheetName = workbook.SheetNames[0];
                    const sheet = workbook.Sheets[sheetName];
                    const productos = XLSX.utils.sheet_to_json(sheet);
                    mostrarProductos(productos);
                });
        }

        function mostrarProductos(productos) {
            const productGrid = document.getElementById('product-grid');
            productGrid.innerHTML = '';
            productos.forEach(producto => {
                const promocionHTML = producto.Promoción ? `<span class="span-nuevo">${producto.Promoción}</span>` : '';
                const productHTML = `
                    <div id="${producto.ID}" class="product" data-category="${producto.Categoría}">
                        <div class="product-loader">
                            <div class="spinner"></div>
                        </div>
                        ${promocionHTML}
                        <img src="/1pagina militar/add/${producto['Imagen Principal']}" alt="${producto.Nombre}">
                        <h3 class="titleproductos">${producto.Nombre}</h3>
                        <button onclick="showProductDetails(event)">Seleccionar</button>
                        <div class="product-details" style="display: none;">
                            <img class="imag1" src="/1pagina militar/add/${producto['Imagen 1']}" alt="Imagen 1">
                            <img class="imag2" src="/1pagina militar/add/${producto['Imagen 2']}" alt="Imagen 2">
                            <img class="imag3" src="/1pagina militar/add/${producto['Imagen 3']}" alt="Imagen 3">
                            <p class="descripcion">${producto.Descripción}</p>
                            <p class="tipo">${producto.Tipo}</p>
                            <p class="lugar">${producto.Ubicación}</p>
                            <p class="precio">${producto['Precio Original']}</p>
                            <p class="precio2">${producto['Precio Promoción']}</p>
                        </div>
                    </div>
                `;
                productGrid.innerHTML += productHTML;
            });

            // Re-renderizar paginación después de cargar productos
            const initialProducts = Array.from(document.querySelectorAll('#product-grid .product'));
            renderPagination(initialProducts);
            showProducts(1, initialProducts);
            updateActivePage(1);
        }

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

            const productDetails = document.getElementById('product-details');
            productDetails.innerHTML = '';

            const productHTML = `
                <a href="#Productos"><button id="regresar-btn"><img class="mario" src="/1pagina civil/img/iconos/volver.png" alt="volver"></button></a>
                <div class="detallesproductosmargen" style="display: flex; align-items: center; flex-direction: row; flex-wrap: wrap;">
                    <div>
                        <img id="product1" src="${imag1}" onclick="changeMainImage(this.src)"><br>
                        <img id="product2" src="${imag2}" onclick="changeMainImage(this.src)"><br>
                        <img id="product3" src="${imag3}" onclick="changeMainImage(this.src)">
                    </div>
                    <div>
                        <img id="productoImagen" src="${image}" alt="${title}" onclick="showEnlargedImage(this.src)">
                    </div>
                    <div style="margin-left: 20px;">
                        <h2 id="titleProducto">${title}</h2>
                        <p id="tipoProducto"><b>Tipo:</b> ${tipo}</p>
                        <p id="ubicacionProducto"><b>Ubicación:</b> ${lugar}</p>
                        <p id="ubicacionProducto"><b>Precio:</b><del> ${precio}</del> - ${precio2}</p>
                        <button id="pedir-producto" onclick="showPopup()">Pedir producto</button>
                    </div>
                </div>
                <div>
                    <h3 id="descripcionProducto2">Descripción del producto</h3>
                    <p id="descripcionProducto">${description.replace(/\n/g, '<br>')}</p>
                </div>
            `;

            productDetails.innerHTML = productHTML;
            productDetails.style.display = 'block';

            const productGrid = document.getElementById('product-grid');
            productGrid.style.display = 'none';

            const regresarBtn = document.getElementById('regresar-btn');
            regresarBtn.addEventListener('click', () => {
                productDetails.style.display = 'none';
                productGrid.style.display = 'grid';
            });
        }

        function changeMainImage(imageSrc) {
            const mainImage = document.getElementById('productoImagen');
            mainImage.src = imageSrc;
        }

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
            enlargedImageContainer.style.opacity = '0';
            enlargedImageContainer.style.transition = 'opacity 0.3s ease';
            enlargedImageContainer.style.backdropFilter = 'blur(5px)';

            const enlargedImage = document.createElement('img');
            enlargedImage.src = imageSrc;
            enlargedImage.style.maxWidth = '90%';
            enlargedImage.style.maxHeight = '90%';
            enlargedImage.style.transform = 'scale(0.8)';
            enlargedImage.style.transition = 'transform 0.3s ease';

            enlargedImageContainer.appendChild(enlargedImage);
            document.body.appendChild(enlargedImageContainer);

            setTimeout(() => {
                enlargedImageContainer.style.opacity = '1';
                enlargedImage.style.transform = 'scale(1)';
            }, 10);

            enlargedImageContainer.addEventListener('click', () => {
                enlargedImageContainer.style.opacity = '0';
                enlargedImage.style.transform = 'scale(0.8)';

                setTimeout(() => {
                    document.body.removeChild(enlargedImageContainer);
                }, 300);
            });
        }

        function showPopup() {
            document.getElementById('popup').style.display = 'block';
        }

        window.addEventListener('DOMContentLoaded', leerExcel);
</script>
<!-- Script de categorías y paginación -->
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const productGrid = document.getElementById('product-grid');
            const pagination = document.getElementById('pagination');
            const productsPerPage = 20;

            // Función para renderizar la paginación
            function renderPagination(products) {
                pagination.innerHTML = '';
                const totalPages = Math.ceil(products.length / productsPerPage);
                for (let i = 1; i <= totalPages; i++) {
                    const button = document.createElement('button');
                    button.textContent = i;
                    button.addEventListener('click', () => {
                        showProducts(i, products);
                        updateActivePage(i);
                    });
                    pagination.appendChild(button);
                }
            }

            // Función para mostrar los productos según la página seleccionada
            function showProducts(pageNumber, products) {
                products.forEach(product => product.style.display = 'none');
                const startIndex = (pageNumber - 1) * productsPerPage;
                const endIndex = startIndex + productsPerPage;
                for (let i = startIndex; i < endIndex && i < products.length; i++) {
                    products[i].style.display = 'block';
                }
            }

            // Función para actualizar la página activa en la paginación
            function updateActivePage(pageNumber) {
                const paginationButtons = pagination.querySelectorAll('button');
                paginationButtons.forEach(button => button.classList.remove('active'));
                if (paginationButtons[pageNumber - 1]) {
                    paginationButtons[pageNumber - 1].classList.add('active');
                }
            }

            // Función para mostrar productos filtrados por categoría
            function showFilteredProducts(category) {
                const allProducts = Array.from(document.querySelectorAll('#product-grid .product'));
                const filteredProducts = allProducts.filter(product => {
                    const productCategory = product.getAttribute('data-category').split(',');
                    return category === 'all' || productCategory.includes(category);
                });

                renderPagination(filteredProducts);
                showProducts(1, filteredProducts);
                updateActivePage(1);
            }

            // Agregar eventos a las categorías en el contenedor .categories
            document.querySelectorAll('.categories a').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const category = this.getAttribute('data-category');
                    showFilteredProducts(category);
                });
            });

            // Configuración del MutationObserver para manejar productos dinámicos
            const observer = new MutationObserver(mutations => {
                mutations.forEach(mutation => {
                    mutation.addedNodes.forEach(node => {
                        if (node.nodeType === 1 && node.matches('.product')) { // Verifica si el nodo añadido es un elemento de producto
                            const allProducts = Array.from(document.querySelectorAll('#product-grid .product'));
                            const activeCategory = document.querySelector('.categories a.active');
                            const category = activeCategory ? activeCategory.getAttribute('data-category') : 'all';
                            showFilteredProducts(category);
                        }
                    });
                });
            });

            // Observar cambios en el DOM en el contenedor de productos
            observer.observe(productGrid, { childList: true, subtree: true });

            // Inicializar con los productos actuales
            const initialProducts = Array.from(document.querySelectorAll('#product-grid .product'));
            renderPagination(initialProducts);
            showProducts(1, initialProducts);
            updateActivePage(1);
        });
</script>
<!--Categorias de menú-->
<script>
      document.querySelectorAll('.categories a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const category = this.getAttribute('data-category');
            const products = document.querySelectorAll('.product');

            products.forEach(product => {
                if (category === 'all' || product.getAttribute('data-category') === category) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const links = document.querySelectorAll('.categories-menu a');

      links.forEach(link => {
          link.addEventListener('click', function(event) {
              event.preventDefault();
              const category = this.getAttribute('data-category');
              const products = document.querySelectorAll('.product');

              products.forEach(product => {
                  if (category === 'all' || product.getAttribute('data-category') === category) {
                      product.style.display = '';
                  } else {
                      product.style.display = 'none';
                  }
              });

              // Actualizar la clase active en los enlaces
              links.forEach(l => l.classList.remove('active'));
              this.classList.add('active');
          });
      });
  });
</script>
<!--fin de categorias-->


<!--Scripts-->
<script src="/js/chat.js"></script>
<!--PRODUCTOS
------------------------------------------------------------------------------------------------------->
<!-- <script src="/1pagina militar/js/id-productos.js"></script> -->
<script src="/1pagina militar/js/header-bar.js"></script>
<script src="/1pagina militar/js/article.js"></script>
<script src="/1pagina militar/js/whatsapp.js"></script>
<script src="/1pagina militar/js/sitio-prod.js"></script>
<!--contenedor de detalles + input de búsqueda + productos + barra de navegacion + popup-->
<script src="/1pagina militar/js/barra-de-navegacion.js"></script>

<!--Fin-->

</body>
</html>

<!--cursor-->
<?php require '../../1pagina militar/src/cursor.php'; ?>
