
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



//______________________________________________________________________________________________________________
      // regresar todos"
      const regresarBtn = document.getElementById('all');
      regresarBtn.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const camisas = document.getElementById('camisas');
      camisas.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const busos = document.getElementById('busos');
      busos.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const bordados = document.getElementById('bordados');
      bordados.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const cascos = document.getElementById('cascos');
      cascos.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const nuevo = document.getElementById('nuevo');
      nuevo.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const ofertas = document.getElementById('ofertas');
      ofertas.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const destacados = document.getElementById('destacados');
      destacados.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const acesorios = document.getElementById('acesorios');
      acesorios.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const camibusos = document.getElementById('camibusos');
      camibusos.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const pantalones = document.getElementById('pantalones');
      pantalones.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const tennis = document.getElementById('tennis');
      tennis.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const bolsos = document.getElementById('bolsos');
      bolsos.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const banderase = document.getElementById('banderase');
      banderase.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const banderasi = document.getElementById('banderasi');
      banderasi.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const banderines = document.getElementById('banderines');
      banderines.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const estampados = document.getElementById('estampados');
      estampados.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const personalizados = document.getElementById('personalizados');
      personalizados.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const gorras = document.getElementById('gorras');
      gorras.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const boinas = document.getElementById('boinas');
      boinas.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const pavas = document.getElementById('pavas');
      pavas.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const policia = document.getElementById('policia');
      policia.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const rescate = document.getElementById('rescate');
      rescate.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const privada = document.getElementById('privada');
      privada.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const vial = document.getElementById('vial');
      vial.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });
      const insignias = document.getElementById('insignias');
      insignias.addEventListener('click', () => {
          productDetails.classList.add('slide-out');
          
          setTimeout(() => {
              productDetails.style.display = 'none';
              productDetails.classList.remove('slide-out');
              productGrid.style.display = 'grid';
          }, 500);
      });