<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Producciones Leon</title>
    <link rel="icon" href="/1pagina militar/img/iconos/LOGO hd.png">
    <!-- Estilos -->
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
    <!-- Estilos personalizados -->
    <style>
        .categories a.active {
            font-weight: bold;
        }

        .categories-menu li.active {
            font-weight: bold;
            background-color: #f3f3f3;
            transform: translateX(10px);
        }
        .categories-menu a.active {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Header Barra de navegación -->
    <?php include '../../1pagina militar/src/header.php'; ?>

    <!-- Contenido de la página -->
    <div class="container-productos">
        <!-- Barra lateral de productos -->
        <div class="sidebar-productos">
            <div class="categories-menu">
                <h3>Categorías</h3>
                <ul class="submovil">
                    <!-- Listado de categorías -->
                    <!-- [Contenido similar al original...] -->
                </ul>
                <ul class="subpc">
                    <!-- Listado de categorías para pantallas grandes -->
                    <!-- [Contenido similar al original...] -->
                </ul>
            </div>
        </div>

        <!-- Contenido de productos -->
        <div class="content-productos">
            <nav class="buscadorproductos">
                <nav>
                    <a class="active">Productos</a>
                </nav>
                <div class="search-icons">
                    <input type="text" placeholder="Buscar">
                </div>
            </nav>

            <div class="categories">
                <!-- Filtros de categorías -->
                <!-- [Contenido similar al original...] -->
            </div>

            <main>
                <div id="product-details" style="display: none;">
                    <button id="regresar-btn">Regresar</button>
                    <button id="pedir-producto">Pedir producto</button>
                </div>
                <div id="product-grid">
                    <!-- Productos cargados dinámicamente -->
                    <?php
                    require '../../php/baseDatos.php';
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM militar";
                    $result = $conn->query($sql);
                    $defaultImage = 'https://produccionesleon.com/img/imagenes/error.png';
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div id="' . $row['id_producto'] . '" class="product" data-category="' . $row['categorias'] . ',' . $row['estado'] . '">';
                            echo '<span class="span-nuevo">' . $row['estado'] . '</span>';
                            echo '<img src="' . htmlspecialchars($row['imagen1'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '" onerror="this.onerror=null;this.src=\'' . $defaultImage . '\'">';
                            echo '<h3 class="titleproductos">' . $row['nombre'] . '</h3>';
                            echo '<a href="#' . $row['id_producto'] . '"><button>Seleccionar</button></a>';
                            echo '<div id="product-details" style="display: none;">';
                            echo '<img class="imag1" src="' . $row['imagen2'] . '" alt="imagen1">';
                            echo '<img class="imag2" src="' . $row['imagen3'] . '" alt="imagen2">';
                            echo '<img class="imag3" src="' . $row['imagen4'] . '" alt="imagen3">';
                            echo '</div>';
                            echo '<div id="product-details" style="display: none;">';
                            echo '<p class="descripcion">' . $row['descripcion'] . '</p>';
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

    <!-- Pedir producto -->
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

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buyButton = document.getElementById('buyButton');
            buyButton.addEventListener('click', function() {
                const currentPageUrl = window.location.href;
                const phoneNumber = "+573008645571";
                const text = `Me interesa adquirir este producto, ¿Podrías proporcionarme información sobre su precio? ${currentPageUrl}`;
                var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                var whatsappLink = isMobile 
                    ? `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`
                    : `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(text)}`;
                document.getElementById('whatsappLink').href = whatsappLink;
            });
        });

        // Mostrar detalles del producto
        function showProductDetails(event) {
            // Código para mostrar detalles del producto...
        }

        // Función para filtrar productos
        const searchInput = document.querySelector('.search-icons input');
        searchInput.addEventListener('keydown', event => {
            if (event.key === 'Enter') {
                const searchQuery = event.target.value.trim();
                filterProductsByTitle(searchQuery);
            }
        });

        // Función para filtrar productos por título
        function filterProductsByTitle(query) {
            // Código para filtrar productos...
        }

        // Mostrar/ocultar popup
        document.getElementById('pedir-producto').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    </script>

    <!-- Footer -->
    <?php include '../../1pagina militar/src/footer.php'; ?>
    <!-- Scripts adicionales -->
    <script src="/1pagina militar/js/id-productos.js"></script>
    <script src="/1pagina militar/js/header-bar.js"></script>
    <script src="/1pagina militar/js/article.js"></script>
    <script src="/1pagina militar/js/whatsapp.js"></script>
    <script src="/1pagina militar/js/sitio-prod.js"></script>
    <script src="/js/chat.js"></script>
</body>

</html>
