
//-contenedor de detalles del producto--------------------------------------------------------------------------------------------------------
 //==================================================================================================================
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
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

            // const productHTML = `
            //     <button id="regresar-btn"><img class="mario" src="/img/iconos/volver.png" alt="volver"></button>
            //     <div style="display: flex; align-items: center;">
            //         <div>
            //             <img id="product1" src="${imag1}" onclick="changeMainImage(this.src)"><br>
            //             <img id="product2" src="${imag2}" onclick="changeMainImage(this.src)"><br>
            //             <img id="product3" src="${imag3}" onclick="changeMainImage(this.src)">
            //         </div>
            //         <div>
            //             <img id="productoImagen" src="${image}" alt="${title}" onclick="showEnlargedImage(this.src)">
                        
            //           <h3 id="descripcionProducto2">Descripción del producto</h3>
            //           <p id="descripcionProducto">${description}</p>
                        
            //         </div>
            //         <div style="margin-left: 20px;">
            //             <h2 id="titleProducto">${title}</h2>
            //             <p id="tipoProducto"><b>Tipo:</b> ${tipo}</p>
            //             <p id="ubicacionProducto"><b>Ubicación:</b> ${lugar}</p>
            //             <button id="pedir-producto" onclick="showPopup()">Pedir producto</button>
            //         </div>
            //     </div>
            // `;
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



//-input de búsqueda--------------------------------------------------------------------------------------------------------
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
  
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

//-Productos inicio--------------------------------------------------------------------------------------------------------
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
  
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
  
//-barra de navegacion--------------------------------------------------------------------------------------------------------
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
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
//--popup-------------------------------------------------------------------------------------------------------------
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
//==================================================================================================================
        
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

  