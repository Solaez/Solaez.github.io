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
