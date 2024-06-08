
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
        const allProducts = Array.from(document.querySelectorAll('#product-grid .product'));
        const filteredProducts = allProducts.filter(product => {
            const productCategory = product.getAttribute('data-category').split(',');
            return category === 'all' || productCategory.includes(category);
        });

        renderPagination(filteredProducts);
        showProducts(1, filteredProducts);
        updateActivePage(1);
    }

    // Agregar eventos a las categorías
    document.querySelectorAll('.categories-menu a').forEach(link => {
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
                    const activeCategory = document.querySelector('.categories-menu a.active');
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
//arriba

//para arriba movil

document.addEventListener("DOMContentLoaded", function() {
    // Función para detectar si es un dispositivo móvil
    function isMobileDevice() {
      return window.innerWidth <= 768;
    }

    if (isMobileDevice()) {
      // Obtener todos los enlaces con id="arribaProduc"
      var links = document.querySelectorAll('#arribaProduc');

      // Añadir un evento click a cada enlace
      links.forEach(function(link) {
        link.addEventListener('click', function(event) {
          event.preventDefault(); // Prevenir el comportamiento por defecto del enlace

          // Animación de desplazamiento suave
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });
      });
    }
  });

//para arriba
document.getElementById("pagination").addEventListener("click", function() {
    scrollToTop(1000); // Tiempo en milisegundos para la animación
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
  //arriba
  document.querySelectorAll(".scrollToTop").forEach(function(element) {
    element.addEventListener("click", function() {
        scrollToTop(1000); // Tiempo en milisegundos para la animación
    });
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
    
document.querySelectorAll('#all').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#camisas').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#busos').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#bordados').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#cascos').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#nuevo').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#ofertas').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#destacados').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#acesorios').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#camibusos').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#pantalones').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#tennis').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#estampados').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#personalizados').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#gorras').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#boinas').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#pavas').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#policia').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#rescate').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#privada').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#vial').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
document.querySelectorAll('#insignias').forEach(function(element) {
    element.addEventListener('click', () => {
        productDetails.classList.add('slide-out');
        
        setTimeout(() => {
            productDetails.style.display = 'none';
            productDetails.classList.remove('slide-out');
            productGrid.style.display = 'grid';
        }, 500);
    });
});
