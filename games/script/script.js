$(function () {
        $(".menu-link").click(function () {
            $(".menu-link").removeClass("is-active");
            $(this).addClass("is-active");
        });
    });

    $(function () {
        $(".main-header-link").click(function () {
            $(".main-header-link").removeClass("is-active");
            $(this).addClass("is-active");
        });
    });

    const dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("click", e => {
            e.stopPropagation();
            dropdowns.forEach(c => c.classList.remove("is-active"));
            dropdown.classList.add("is-active");
        });
    });

    $(".search-bar input").
        focus(function () {
            $(".header").addClass("wide");
        }).
        blur(function () {
            $(".header").removeClass("wide");
        });

    $(document).click(function (e) {
        var container = $(".status-button");
        var dd = $(".dropdown");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            dd.removeClass("is-active");
        }
    });

    $(function () {
        $(".dropdown").on("click", function (e) {
            $(".content-wrapper").addClass("overlay");
            e.stopPropagation();
        });
        $(document).on("click", function (e) {
            if ($(e.target).is(".dropdown") === false) {
                $(".content-wrapper").removeClass("overlay");
            }
        });
    });

    $(function () {
        $(".status-button:not(.open)").on("click", function (e) {
            $(".overlay-app").addClass("is-active");
        });
        $(".pop-up .close").click(function () {
            $(".overlay-app").removeClass("is-active");
        });
    });

    $(".status-button:not(.open)").click(function () {
        $(".pop-up").addClass("visible");
    });

    $(".pop-up .close").click(function () {
        $(".pop-up").removeClass("visible");
    });

    const toggleButton = document.querySelector('.dark-light');

    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');
    });
    //# sourceURL=pen.js

    //botom volve ------------------------------------------------------------------------------------
    document.querySelector('.volver-btn').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('detalle-juego').classList.add('hidden');
        document.getElementById('grid-juegos').classList.remove('hidden');
    });

    // filtrar juegos por categoria ------------------------------------------------
     document.addEventListener('DOMContentLoaded', () => {
            const grid = document.getElementById('grid-juegos');
            let juegosOriginales = [];

            // Guardamos los juegos cargados para filtrar luego
            fetch('games/juegos.json')
                .then(res => res.json())
                .then(juegos => {
                    juegosOriginales = juegos;
                    mostrarJuegos(juegosOriginales);
                });

            function mostrarJuegos(juegos) {
                grid.innerHTML = '';
                juegos.forEach((juego, index) => {
                    const card = document.createElement('div');
                    card.classList.add('app-card');
                    card.innerHTML = `
        <img src="${juego.imagen}" alt="${juego.titulo}">
        <div class="app-card__subtext">${juego.titulo}</div>
        <div class="app-card-buttons">
          <button class="content-button" data-index="${index}">Details</button>
        </div>
      `;
                    card.setAttribute('data-categoria', juego.categoria.toLowerCase());
                    grid.appendChild(card);
                });
            }

            // Filtrar juegos por categoría ------------------------------------------------
            document.getElementById('filtros-categorias').addEventListener('click', (e) => {
                if (e.target.classList.contains('categoria-link')) {
                    e.preventDefault();
                    const categoria = e.target.dataset.categoria;

                    const juegosFiltrados = categoria === 'todos'
                        ? juegosOriginales
                        : juegosOriginales.filter(j => j.categoria.toLowerCase() === categoria.toLowerCase());

                    mostrarJuegos(juegosFiltrados);
                }
            });
        });

        // varias descargar en el popup  -------------------------------------------------------
          document.addEventListener('click', function (e) {
            const popup = document.getElementById('popup');
            const optionsContainer = document.getElementById('popup-download-options');

            // Mostrar popup con múltiples opciones
            if (e.target.classList.contains('descargar-btn')) {
                const data = e.target.dataset.descargas;
                const descargas = JSON.parse(data);

                optionsContainer.innerHTML = ''; // Limpiar

                descargas.forEach(d => {
                    const btn = document.createElement('a');
                    btn.href = d.url;
                    btn.textContent = d.nombre;
                    btn.className = 'content-button close';
                    btn.target = '_blank';
                    btn.style.display = 'block';
                    btn.style.marginBottom = '10px';
                    optionsContainer.appendChild(btn);
                });

                popup.classList.add('visible');
            }

            // Cerrar popup
            if (e.target.classList.contains('close')) {
                popup.classList.remove('visible');
            }
        });


        document.addEventListener('DOMContentLoaded', () => {
  const grid = document.getElementById('grid-juegos');
  const searchInput = document.getElementById('search-input');
  let juegosOriginales = [];

  // Cargar juegos
  fetch('games/juegos.json')
    .then(res => res.json())
    .then(juegos => {
      juegosOriginales = juegos;
      mostrarJuegos(juegosOriginales);
    });

  // Mostrar juegos
  function mostrarJuegos(juegos) {
    grid.innerHTML = '';
    juegos.forEach((juego, index) => {
      const card = document.createElement('div');
      card.classList.add('app-card');
      card.innerHTML = `
        <img src="${juego.imagen}" alt="${juego.titulo}">
        <div class="app-card__subtext">${juego.titulo}</div>
        <div class="app-card-buttons">
          <button class="content-button" data-index="${index}">Detalles</button>
        </div>
      `;
      grid.appendChild(card);
    });
  }

  // Búsqueda en tiempo real
  searchInput.addEventListener('input', () => {
    const filtro = searchInput.value.toLowerCase();
    const juegosFiltrados = juegosOriginales.filter(j =>
      j.titulo.toLowerCase().includes(filtro)
    );
    mostrarJuegos(juegosFiltrados);
  });
});
//usuario ----------------------------------------------------------------------------------
   const profileToggle = document.getElementById('profileToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');

        profileToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('visible');
        });

        // Cierra el menú si haces clic fuera
        document.addEventListener('click', (e) => {
            if (!profileToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('visible');
            }
        });
