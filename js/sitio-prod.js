
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

    // Evento de clic para cada enlace de categoría
    document.querySelectorAll('.categories a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');
            showFilteredProducts(category);
        });
    });

    // Función para mostrar productos filtrados por categoría
    function showFilteredProducts(category) {
        let filteredProducts = [];
        products.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            if (category === 'all' || productCategory === category) {
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

    // Agregar evento de clic a los enlaces del menú lateral
    const categoriesMenuLinks = document.querySelectorAll('.categories-menu ul li a');
    categoriesMenuLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const category = this.getAttribute('data-category');
            showFilteredProducts(category);

            // Remover la clase 'active' de todos los enlaces
            categoriesMenuLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
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
  
  