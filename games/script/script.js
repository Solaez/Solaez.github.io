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
const toggleButton = document.querySelector('.dark-light');
toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
});

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
                <div class="app-card__subtext">${juego.titulo}</div>
                <div class="app-card-buttons">
                    <button class="content-button" data-index="${index}">Detalles</button>
                </div>
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

    if (e.target.classList.contains('close')) {
        popup.classList.remove('visible');
    }
});
