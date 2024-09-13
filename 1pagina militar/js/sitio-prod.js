document.addEventListener('DOMContentLoaded', function () {
    const products = document.querySelectorAll('#product-grid .product');
    const productsPerPage = 20;

    // Función para renderizar la paginación
    function renderPagination(products) {
        const pagination = document.getElementById('pagination');
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

    // Función para mostrar los productos en la página actual
    function showProducts(pageNumber, products) {
        const startIndex = (pageNumber - 1) * productsPerPage;
        const endIndex = startIndex + productsPerPage;
        products.forEach((product, index) => {
            if (index >= startIndex && index < endIndex) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    // Función para actualizar el estilo del botón de página activa
    function updateActivePage(pageNumber) {
        const paginationButtons = document.querySelectorAll('#pagination button');
        paginationButtons.forEach(button => {
            button.classList.remove('active');
        });
        paginationButtons[pageNumber - 1].classList.add('active');
    }

    // Función para mostrar productos filtrados por categoría
    function showFilteredProducts(category) {
        let filteredProducts = [];
        products.forEach(product => {
            const productCategory = product.getAttribute('data-category').split(',');
            if (category === 'all' || productCategory.includes(category)) {
                product.style.display = 'block';
                filteredProducts.push(product);
            } else {
                product.style.display = 'none';
            }
        });
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';
        renderPagination(filteredProducts);
        showProducts(1, filteredProducts);
        updateActivePage(1);
    }

    // Evento de clic para cada enlace de categoría
    document.querySelectorAll('.categories a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');
            showFilteredProducts(category);
        });
    });

    // Agregar evento de clic a los enlaces del menú lateral
    const categoriesMenuLinks = document.querySelectorAll('.categories-menu ul li a');
    categoriesMenuLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const isPersonalizados = this.getAttribute('id') === 'personalizados';
            if (isPersonalizados) {
                // No prevenir el comportamiento del enlace para 'Personalizados'
                window.location.href = '/1pagina militar/sitios/personalizado.php';
            } else {
                e.preventDefault();
                const category = this.getAttribute('data-category');
                showFilteredProducts(category);

                // Remover la clase 'active' de todos los enlaces
                categoriesMenuLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            }
        });
    });

    // Inicializa la página
    renderPagination(products);
    showProducts(1, products);
    updateActivePage(1);

    // Inicializar con el filtro "camisas"
    showFilteredProducts('all');
});

//Buscador--------------------------------------------------------------

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
//para arriba
document.getElementById("pagination").addEventListener("click", function() {
    scrollToTop(500); // Tiempo en milisegundos para la animación
  });
  
  function scrollToTop(duration) {
    const startingY = window.pageYOffset;
    const startTime = performance.now();
  
    function easeInOutQuad(time, start, change, duration) {
        time /= duration / 2;
        if (time < 1) return change / 2 * time * time + start;
        time--;
        return -change / 2 * (time * (time - 2) - 1) + start;
    }
  
    function animation() {
        const timeElapsed = performance.now() - startTime;
        window.scrollTo(0, easeInOutQuad(timeElapsed, startingY, -startingY, duration));
        if (timeElapsed < duration) requestAnimationFrame(animation);
    }
  
    requestAnimationFrame(animation);
  }
  
  //categorias -------------------------------------------------------------------------------------
  
        // Función para abrir y cerrar el menú desplegable
const submenuLinks = document.querySelectorAll('.categories-menu ul li > a');

submenuLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Evita que el enlace se siga

        const submenu = link.nextElementSibling;
        if (submenu && submenu.classList.contains('submenu')) {
            submenu.classList.toggle('open');
        }
    });
});

//.-------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------------

// document.querySelectorAll('#all').forEach(function(element) {
//     element.addEventListener('click', () => {
//         productDetails.classList.add('slide-out');
        
//         setTimeout(() => {
//             productDetails.style.display = 'none';
//             productDetails.classList.remove('slide-out');
//             productGrid.style.display = 'flex';
//         }, 500);
//     });
// });
// document.querySelectorAll('#camisas').forEach(function(element) {
//     element.addEventListener('click', () => {
//         productDetails.classList.add('slide-out');
        
//         setTimeout(() => {
//             productDetails.style.display = 'none';
//             productDetails.classList.remove('slide-out');
//             productGrid.style.display = 'flex';
//         }, 500);
//     });
// });
// document.querySelectorAll('#busos').forEach(function(element) {
//     element.addEventListener('click', () => {
//         productDetails.classList.add('slide-out');
        
//         setTimeout(() => {
//             productDetails.style.display = 'none';
//             productDetails.classList.remove('slide-out');
//             productGrid.style.display = 'flex';
//         }, 500);
//     });
// });
// document.querySelectorAll('#bordados').forEach(function(element) {
//     element.addEventListener('click', () => {
//         productDetails.classList.add('slide-out');
        
//         setTimeout(() => {
//             productDetails.style.display = 'none';
//             productDetails.classList.remove('slide-out');
//             productGrid.style.display = 'flex';
//         }, 500);
//     });
// });
// document.querySelectorAll('#cascos').forEach(function(element) {
//     element.addEventListener('click', () => {
//         productDetails.classList.add('slide-out');
        
//         setTimeout(() => {
//             productDetails.style.display = 'none';
//             productDetails.classList.remove('slide-out');
//             productGrid.style.display = 'flex';
//         }, 500);
//     });
// });



//______________________________________________________________________________________________________________
    // Función para manejar el evento de clic
function handleCategoryClick(event) {
    productDetails.classList.add('slide-out');
    
    setTimeout(() => {
        productDetails.style.display = 'none';
        productDetails.classList.remove('slide-out');
        productGrid.style.display = 'flex';
    }, 500);
}

// Obtener todos los botones
const buttons = [
    'all', 'camisas', 'busos', 'bordados', 'cascos', 'nuevo', 'ofertas', 
    'destacados', 'acesorios', 'camibusos', 'pantalones', 'tennis', 
    'bolsos', 'banderase', 'banderasi', 'banderines', 'estampados', 
    'personalizados', 'gorras', 'boinas', 'pavas', 'policia', 
    'rescate', 'privada', 'vial', 'insignias'
];

// Agregar el evento de clic a cada botón
buttons.forEach(id => {
    const button = document.getElementById(id);
    button.addEventListener('click', handleCategoryClick);
});
//--------------------------------------------------------------------------SELECCION DE CATEGORIAS SIMPRES
document.addEventListener('DOMContentLoaded', function() {
    // Función para manejar el cambio de clase 'active'
    function handleActiveClass(selector) {
        const elements = document.querySelectorAll(selector);
        
        elements.forEach(element => {
            element.addEventListener('click', function(event) {
                event.preventDefault();

                // Remover la clase 'active' de todos los elementos
                elements.forEach(el => el.classList.remove('active'));

                // Agregar la clase 'active' al elemento clicado
                this.classList.add('active');
            });
        });
    }

    // Aplicar la función a los diferentes selectores
    handleActiveClass('.categories a');
    handleActiveClass('.categories-menu a');
    handleActiveClass('.categories-menu li');
});
