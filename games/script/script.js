// ========== MENÚS Y CLASES ACTIVAS ==========
$(function () {
    $(".menu-link").click(function () {
        $(".menu-link").removeClass("is-active");
        $(this).addClass("is-active");
    });

    $(".main-header-link").click(function () {
        $(".main-header-link").removeClass("is-active");
        $(this).addClass("is-active");
    });

    $(".dropdown").on("click", function (e) {
        $(".content-wrapper").addClass("overlay");
        e.stopPropagation();
    });

    $(document).on("click", function (e) {
        if (!$(e.target).closest(".dropdown").length) {
            $(".content-wrapper").removeClass("overlay");
            $(".dropdown").removeClass("is-active");
        }
    });

    $(".status-button:not(.open)").click(function () {
        $(".overlay-app").addClass("is-active");
        $(".pop-up").addClass("visible");
    });

    $(".pop-up .close").click(function () {
        $(".overlay-app").removeClass("is-active");
        $(".pop-up").removeClass("visible");
    });
});

// ========== DROPDOWNS NATIVOS ==========
const dropdowns = document.querySelectorAll(".dropdown");
dropdowns.forEach(dropdown => {
    dropdown.addEventListener("click", e => {
        e.stopPropagation();
        dropdowns.forEach(c => c.classList.remove("is-active"));
        dropdown.classList.add("is-active");
    });
});

$(document).click(function (e) {
    const container = $(".status-button");
    const dd = $(".dropdown");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        dd.removeClass("is-active");
    }
});

// ========== MODO CLARO/OSCURO ==========
// const toggleButton = document.querySelector('.dark-light');
// toggleButton.addEventListener('click', () => {
//     document.body.classList.toggle('light-mode');
// });

// ========== SEARCH BAR EXPAND ==========
$(".search-bar input")
    .focus(function () {
        $(".header").addClass("wide");
    })
    .blur(function () {
        $(".header").removeClass("wide");
    });

// ========== BOTÓN VOLVER ==========
document.querySelectorAll('.volver-btn').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('detalle-juego').classList.add('hidden');
        document.getElementById('grid-juegos').classList.remove('hidden');
    });
});

// ========== MANEJO DE USUARIO (PERFIL) ==========
const profileToggle = document.getElementById('profileToggle');
const dropdownMenu = document.getElementById('dropdownMenu');

profileToggle.addEventListener('click', () => {
    dropdownMenu.classList.toggle('visible');
});

document.addEventListener('click', (e) => {
    if (!profileToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove('visible');
    }
});

// ========== NOTIFICACIONES ==========
const notification = document.getElementById('notification');
const card = document.getElementById('card');

notification.addEventListener('click', (e) => {
    e.stopPropagation();
    card.style.display = (card.style.display === 'block') ? 'none' : 'block';
});

card.addEventListener('click', (e) => {
    e.stopPropagation();
});

document.addEventListener('click', () => {
    card.style.display = 'none';
});

// ========== CARGA Y FILTRO DE JUEGOS ==========
document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('grid-juegos');
    const detalle = document.getElementById('detalle-juego');
    const searchInput = document.getElementById('search-input');
    let juegosOriginales = [];
    let juegosVisibles = [];

    fetch('games/juegos.json')
        .then(res => res.json())
        .then(juegos => {
            juegosOriginales = juegos;
            mostrarJuegos(juegosOriginales);

            grid.addEventListener('click', (e) => {
            if (e.target.classList.contains('content-button')) {
                const index = e.target.getAttribute('data-index');
                const juego = juegosVisibles[index]; // ← Ahora usamos juegosVisibles

                grid.classList.add('hidden');
                detalle.classList.remove('hidden');
                detalle.innerHTML = `
                    <div class="detail-card">
                        <div class="ext-card">
                            <img src="${juego.imagen}" alt="${juego.titulo}">
                            <div class="conte-card">
                                <div class="title-card"><h2>${juego.titulo}</h2></div>
                                <div class="desc-card"><p>${juego.descripcion}</p></div>
                                <div class="down-card">
                                    <button class="content-button descargar-btn" data-descargas='${JSON.stringify(juego.descargas)}'>Download</button>
                                </div>
                                <div class="manu-card"><p>${juego.manual}</p></div>
                            </div>
                        </div>
                    </div>
                `;
            }
        });

        })
        .catch(error => console.error('Error al cargar juegos:', error));

    function mostrarJuegos(juegos) {
        juegosVisibles = juegos; // ← Guardamos los juegos que se están mostrando
        grid.innerHTML = '';
        juegos.forEach((juego, index) => {
            const card = document.createElement('div');
            card.classList.add('app-card');
            card.innerHTML = `
                <img src="${juego.imagen}" alt="${juego.titulo}">
                <div class="app-card__subtext"><div class="card-titles"> ${juego.titulo} </div><button class="content-button" data-index="${index}">Detalles</button></div>
                    <p>${juego.categoria} </p>
            `;
            grid.appendChild(card);
        });
    }

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

    searchInput.addEventListener('input', () => {
        const filtro = searchInput.value.toLowerCase();
        const juegosFiltrados = juegosOriginales.filter(j =>
            j.titulo.toLowerCase().includes(filtro)
        );
        mostrarJuegos(juegosFiltrados);
    });
});

// ========== DESCARGAS EN POPUP ==========
document.addEventListener('click', function (e) {
    const popup = document.getElementById('popup');
    const optionsContainer = document.getElementById('popup-download-options');

    if (e.target.classList.contains('descargar-btn')) {
        const data = e.target.dataset.descargas;
        const descargas = JSON.parse(data);
        optionsContainer.innerHTML = '';

        descargas.forEach(d => {
            const btn = document.createElement('a');
            btn.textContent = d.nombre;
            btn.className = 'content-button close';
            btn.style.display = 'block';
            btn.style.marginBottom = '10px';

          if (d.url.startsWith('magnet:')) {
                btn.href = '#';
                btn.onclick = () => {
                    window.electronAPI.descargarMagnet(d.url);
                    popup.classList.remove('visible');
                };
            }
            else {
                btn.href = d.url;
                btn.target = '_blank';
            }

            optionsContainer.appendChild(btn);
        });

        popup.classList.add('visible');
    }

    if (e.target.classList.contains('close')) {
        popup.classList.remove('visible');
    }
});

// ========== botones de la ventana ==========
 document.getElementById("btn-minimize").addEventListener("click", () => {
   window.electronAPI.minimizeWindow();
 });

 document.getElementById("btn-maxi").addEventListener("click", () => {
   window.electronAPI.toggleMaximize();
 });

 document.getElementById("btn-close").addEventListener("click", () => {
   window.electronAPI.closeWindow();
 });

// ========== PANTALLA DE CARGA ==========
 window.addEventListener('load', () => {
        setTimeout(() => {
            const loaderBar = document.querySelector('.loader-bar');
            const logo = document.querySelector('.logo');

            // Desvanece la barra de carga primero
            loaderBar.style.transition = 'opacity 0.6s ease';
            loaderBar.style.opacity = '0';

            // Luego de 600ms, explota el logo
            setTimeout(() => {
                logo.classList.add('explode');

                // Luego de la explosión, ocultamos todo el preloader
                setTimeout(() => {
                    const preloader = document.getElementById('preloader');
                    preloader.style.opacity = '0';
                    preloader.style.transition = 'opacity 1s ease';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                        document.querySelectorAll('.app, .dark-light').forEach(el => {
                        el.style.opacity = "1";
                        });
                    }, 10);
                }, 600); // tiempo de la explosión
            }, 600); // espera a que termine la barra
        }, 2000); // tiempo total de carga
    });
    //========== CONFIGURACION ==========
  document
    .getElementById("menu-config")
    .addEventListener("click", function (e) {
      e.preventDefault();

      // Ocultar contenido principal y filtros
      document.getElementById("main-content").style.display = "none";
      document.getElementById("filtros-categorias").style.display = "none";

      // Ocultar barra de búsqueda, notificación de descarga y menú de encabezado
      document.querySelector(".search-bar").style.display = "none";
      document.getElementById("download-notification").style.display = "none";
      document.querySelector(".subtlile").style.display = "none";

      // Mostrar configuración principal y panel lateral de config
      document.getElementById("config-panel").style.display = "block";
      document.getElementById("config-all").style.display = "block";

      // Asegurarse de mostrar config principal y ocultar test teclado al entrar
      document.getElementById("config-content").style.display = "block";
      document.getElementById("test-teclado").style.display = "none";
      document.getElementById("test-mando").style.display = "none"; // Asegurarse de que test-mando esté oculto al entrar en configuración
    });

  document.querySelectorAll(".volver-btn").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();

      // Mostrar contenido principal y filtros
      document.getElementById("main-content").style.display = "block";
      document.getElementById("filtros-categorias").style.display = "block";

      // Mostrar nuevamente barra de búsqueda, notificación y menú de encabezado
      document.querySelector(".search-bar").style.display = "flex"; // usa "block" si no es flex
      document.getElementById("download-notification").style.display = "block";
      document.querySelector(".subtlile").style.display = "flex"; // usa "block" si no es flex

      // Ocultar panel de configuración y lateral
      document.getElementById("config-panel").style.display = "none";
      document.getElementById("config-all").style.display = "none";

      // Resetear visibilidad de subpaneles de configuración
      document.getElementById("config-content").style.display = "block";
      document.getElementById("test-teclado").style.display = "none";
      document.getElementById("test-mando").style.display = "none"; // Ocultar test-mando al regresar
    });
  });

  // Mostrar el apartado de test teclado al hacer clic
  document
    .querySelector(".btn_teclado")
    .addEventListener("click", function (e) {
      e.preventDefault();

      document.getElementById("config-content").style.display = "none";
      document.getElementById("test-teclado").style.display = "block";
      document.getElementById("test-mando").style.display = "none"; // Asegurarse de ocultar test-mando
    });

  // Mostrar el apartado de test mando al hacer clic
  document.querySelector(".btn_mando").addEventListener("click", function (e) {
    e.preventDefault();

    // Ocultar el contenido de configuración actual (test teclado)
    document.getElementById("config-content").style.display = "none";
    document.getElementById("test-teclado").style.display = "none";

    // Mostrar el apartado de test mando
    document.getElementById("test-mando").style.display = "flex";
  });

  // Volver a configuración principal desde el test del teclado
  document.querySelector(".btn_config").addEventListener("click", function (e) {
    e.preventDefault();

    // Mostrar contenido principal de configuración
    document.getElementById("config-content").style.display = "block";
    document.getElementById("test-teclado").style.display = "none";
    document.getElementById("test-mando").style.display = "none"; // Ocultar test-mando al volver
  });


document.getElementById("theme").addEventListener("change", (event) => {
  const selectedTheme = event.target.value;
  window.electronAPI.changeTheme(selectedTheme); // Notifica al proceso principal
});
