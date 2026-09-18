(function () {
    const linkSupport = document.createElement("link").relList;
    if (linkSupport && linkSupport.supports && linkSupport.supports("modulepreload")) return;
    for (const preloadLink of document.querySelectorAll('link[rel="modulepreload"]')) preloadModule(preloadLink);
    new MutationObserver(mutations => {
        for (const mutation of mutations)
            if (mutation.type === "childList")
                for (const node of mutation.addedNodes)
                    node.tagName === "LINK" && node.rel === "modulepreload" && preloadModule(node);
    }).observe(document, { childList: !0, subtree: !0 });
    function buildPreloadOptions(linkElement) {
        const options = {};
        return (
            linkElement.integrity && (options.integrity = linkElement.integrity),
            linkElement.referrerPolicy && (options.referrerPolicy = linkElement.referrerPolicy),
            linkElement.crossOrigin === "use-credentials"
                ? (options.credentials = "include")
                : linkElement.crossOrigin === "anonymous"
                  ? (options.credentials = "omit")
                  : (options.credentials = "same-origin"),
            options
        );
    }
    function preloadModule(linkElement) {
        if (linkElement.ep) return;
        linkElement.ep = !0;
        const options = buildPreloadOptions(linkElement);
        fetch(linkElement.href, options);
    }
})();
const projects = [
        {
            id: "terminal",
            number: "01",
            title: "BLackPort",
            description:
                "es una tienda de aplicaciones y gestor de mods para Linux y Windows, pensada para descargar software y personalizaciones de forma clara y sencilla.",
            tags: ["JavaScript", "React", "Css", "Node.js", "Vite", "libtorrents", "python"],
        },
        {
            id: "PanelHyperland",
            number: "02",
            title: "Panel-Hyperland",
            description:
                "Un completo panel de control diseñado para resolver la falta de interfaz gráfica en Hyprland, ofreciendo una forma rápida, clara y estilizada de gestionar la pantalla, los accesos directos y los ajustes del entorno.",
            tags: ["HTML", "Javascript", "CSS", "electron", "npmpackages"],
        },
        {
            id: "physics",
            number: "03",
            title: "Producciones Leon S.A.S",
            description: "Un laboratorio interactivo para explorar movimiento, gravedad y pequeñas simulaciones.",
            tags: ["PHP", "JavaScript", "SCSS", "SQL", "Bootstrap"],
        },
        {
            id: "commerce",
            number: "04",
            title: "Aquamembranas",
            description:
                "Una tienda online rápida, con catálogo y herramientas sencillas para gestionar productos. par una mini empresa de venta de membranas y filtros de agua.",
            tags: ["PHP", "SQL", "JavaScript", "CSS"],
        },
        {
            id: "tasks",
            number: "05",
            title: "Editor en navegador",
            description: "Un espacio de trabajo colaborativo pensado para organizar tareas con rapidez y claridad.",
            tags: ["React", "css", "JavaScript", "Node.js"],
        },
        {
            id: "crypto",
            number: "06",
            title: "Reproductor de musica { api de youtube }",
            description: "Un panel de datos en tiempo real que convierte información compleja en decisiones claras.",
            tags: ["React", "Charts", "JavaScript", "api"],
        },
        {
            id: "blackport",
            number: "07",
            title: "UnknownGestor 2.0",
            description: "Un panel de datos en tiempo real que convierte información compleja en decisiones claras.",
            tags: ["JavaScript", "React", "Css", "Node.js", "Vite", "libtorrents", "python", "api"],
        },
    ],
    renderTags = (tags, tagName) =>
        `${tags
            .slice(0, 4)
            .map(tag => `<${tagName}>${tag}</${tagName}>`)
            .join("")}${tags.length > 4 ? `<${tagName}>+${tags.length - 4}</${tagName}>` : ""}`,
    skillLevels = [
        ["HTML", 95, "5"],
        ["CSS", 98, "3"],
        ["Python", 88, "PY"],
        [".net", 88, "net"],
        ["PHP", 93, "php"],
        ["JavaScript", 90, "JS"],
        ["React.js", 85, "R"],
        ["SQL", 80, "NX"],
        ["TypeScript", 85, "TS"],
        ["Node.js", 70, "N"],
        ["Tailwind CSS", 90, "TW"],
        ["Git", 85, "G"],
        ["Linux", 99, "L"],
        ["Shell / Bash", 98, "$"],
        ["Docker", 48, "D"],
    ],
    projectCodeExamples = {
        terminal: [
            "const signal = await scanFilesystem();",
            "if (!signal) return descend({ depth: 3 });",
            "return renderMap(signal.sector);",
        ],
        PanelHyperland: [
            "const wave = createWave({ speed: 0.8 });",
            "score += hit(target.position);",
            "hud.update({ score, shield: 81 });",
        ],
        physics: [
            "const world = new PhysicsWorld({ gravity: 9.81 });",
            "world.add(ball).add(square).add(ground);",
            "return world.step(deltaTime);",
        ],
        commerce: [
            "const collection = await store.featured();",
            "return <ProductGrid items={collection} />;",
            "export default CommerceHome;",
        ],
        tasks: [
            "const tasks = await workspace.tasks({ mine: true });",
            "return <TaskBoard tasks={tasks} />;",
            'keyboard.bind("n", createTask);',
        ],
        crypto: [
            'const market = await api.market("BTC-USD");',
            "chart.setData(market.history);",
            "return <SignalPanel value={market.change} />;",
        ],
        blackport: [
            "const mods = await gestor.fetchMods({ category: 'all' });",
            "return <ModGrid mods={mods} />;",
            'keyboard.bind("ctrl+f", openSearch);',
        ],
    },
    renderProjectPreview = projectId =>
        ({
            terminal:
                '<img src="reference/UnknownGestor.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            PanelHyperland:
                '<img src="reference/Panel-Hyperland.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            physics:
                '<img src="reference/produccinesleon.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            commerce:
                '<img src="reference/aquamembranas.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            crypto: '<img src="reference/music.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            tasks: '<img src="reference/editor.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
            blackport:
                '<img src="reference/black port.png" alt="UnknownGestor, gestor de mods y tienda de aplicaciones" class="vista-previa terminal-preview" />',
        })[projectId],
    actualizarNavegacionActiva = sectionId => {
        document.querySelectorAll(".navegacion-escritorio button, .navegacion-movil button").forEach(button => {
            const estaActiva = button.dataset.scroll === sectionId;
            button.classList.toggle("activa", estaActiva);
            button.setAttribute("aria-current", estaActiva ? "page" : "false");
        });
    },
    scrollToSection = sectionId => {
        actualizarNavegacionActiva(sectionId);
        document.getElementById(sectionId)?.scrollIntoView({ behavior: "smooth", block: "start" });
    },
    projectGrid = document.getElementById("grilla-proyectos");
let activaProjectIndex = 0;
function renderVisibleProjects() {
    const visibleProjects = [0, 1, 2].map(item => projects[(activaProjectIndex + item) % projects.length]);
    ((projectGrid.innerHTML = visibleProjects
        .map(
            project =>
                `<article class="tarjeta-proyecto" tabindex="0" data-project="${project.id}"><div class="numero-proyecto">${project.number}</div>${renderProjectPreview(project.id)}<div class="info-proyecto"><h3>${project.title}</h3><p>${project.description}</p><div class="pie-proyecto"><span>Ver proyecto ↗</span><div>${renderTags(project.tags, "small")}</div></div></div></article>`,
        )
        .join("")),
        (projectGrid.innerHTML = projectGrid.innerHTML
            .replaceAll("signal lost", "señal perdida")
            .replaceAll("WAVE", "OLA")
            .replaceAll("SHIELD", "ESCUDO")
            .replaceAll("INSERT", "INSERTA")
            .replaceAll("gravity", "gravedad")
            .replaceAll("velocity", "velocidad")
            .replaceAll("objects", "objetos")
            .replaceAll("Collections", "Colecciones")
            .replaceAll("Journal", "Revista")
            .replaceAll("NEW SEASON", "NUEVA TEMPORADA")
            .replaceAll("Find your", "Encuentra tu")
            .replaceAll("everyday icon.", "icono diario.")
            .replaceAll("Shop now", "Comprar")
            .replaceAll("My tasks", "Mis tareas")
            .replaceAll("Teams", "Equipos")
            .replaceAll("Workspace", "Espacio de trabajo")
            .replaceAll("Overview", "Resumen")
            .replaceAll("Calendar", "Calendario")
            .replaceAll("Today", "Hoy")
            .replaceAll("Tomorrow", "Mañana")
            .replaceAll("Friday", "Viernes")
            .replaceAll("Markets", "Mercados")
            .replaceAll("Portfolio", "Portafolio")
            .replaceAll("Portfolio balance", "Saldo del portafolio")
            .replaceAll("this month", "este mes")),
        (document.getElementById("carousel-dots").innerHTML = projects
            .map(
                (project, slideIndex) =>
                    `<button aria-label="Mostrar proyecto ${slideIndex + 1}" class="${slideIndex === activaProjectIndex ? "seleccionado" : ""}" data-slide="${slideIndex}"></button>`,
            )
            .join("")),
        projectGrid
            .querySelectorAll("[data-project]")
            .forEach(card => card.addEventListener("click", () => openProjectDialog(card.dataset.project))),
        projectGrid.querySelectorAll("[data-project]").forEach(card =>
            card.addEventListener("keydown", event => {
                (event.key === "Enter" || event.key === " ") && openProjectDialog(card.dataset.project);
            }),
        ),
        document.querySelectorAll("[data-slide]").forEach(slideButton =>
            slideButton.addEventListener("click", () => {
                ((activaProjectIndex = Number(slideButton.dataset.slide)), renderVisibleProjects());
            }),
        ));
}
const escaparHTML = value =>
    String(value).replace(
        /[&<>'"]/g,
        character => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", "'": "&#39;", '"': "&quot;" })[character],
    );
async function cargarVistaProyecto(projectId, workspace) {
    try {
        const response = await fetch(`proyecto%20vista/${encodeURIComponent(projectId)}.json`);
        if (!response.ok) return;
        const vistaProyecto = await response.json();
        const estructura = Array.isArray(vistaProyecto.estructura) ? vistaProyecto.estructura : [];
        const codigo = escaparHTML(vistaProyecto.codigo || "");
        workspace.querySelector(".archivos-espacio").innerHTML =
            `<span class="etiqueta-archivos">ARCHIVOS /</span>${estructura.map(linea => `<span>${escaparHTML(linea)}</span>`).join("")}<span class="etiqueta-archivos etiqueta-archivos-bottom">ESTADO</span><span class="estado-archivo">✓ compilado</span>`;
        workspace.querySelector(".pestana-editor").innerHTML =
            `${escaparHTML(vistaProyecto.archivoPrincipal || "index.html")} <span>×</span>`;
        workspace.querySelector(".codigo-editor").innerHTML = codigo
            .split("\n")
            .map(
                (linea, index) =>
                    `<div class="linea-codigo"><span class="numero-linea">${String(index + 1).padStart(2, "0")}</span><span>${linea || " "}</span></div>`,
            )
            .join("");
    } catch (error) {
        console.warn(`No se pudo cargar la vista del proyecto ${projectId}.`, error);
    }
}
function openProjectDialog(projectId) {
    const seleccionadoProject = projects.find(project => project.id === projectId);
    ((document.getElementById("dialog-number").textContent = `ABRIR PROYECTO / ${seleccionadoProject.number}`),
        (document.getElementById("dialog-description").textContent =
            `${seleccionadoProject.description} Diseñado con claridad, rapidez y una interfaz que siempre muestra el siguiente paso.`),
        (document.getElementById("project-dialog-title").textContent = seleccionadoProject.title),
        (document.getElementById("etiquetas-dialogo").innerHTML = seleccionadoProject.tags
            .map(tag => `<span>${tag}</span>`)
            .join("")),
        (document.getElementById("workspace").innerHTML =
            `<div class="espacio-trabajo"><div class="encabezado-espacio"><div class="marca-espacio"><span class="puntos-espacio"><i></i><i></i><i></i></span><strong>${seleccionadoProject.title.toLowerCase().replaceAll(" ", "-")}</strong><span class="rama-espacio">main</span></div><span class="vivo-espacio"><i></i> live preview</span></div><div class="barra-herramientas"><span>PROJECT / ${seleccionadoProject.number}</span><span>solaez ↗</span></div><div class="cuerpo-espacio"><aside class="archivos-espacio"><span class="etiqueta-archivos">FILES</span><span class="archivo-activo">/ src</span><span>├─ App.tsx</span><span>├─ styles.css</span><span>└─ index.html</span><span class="etiqueta-archivos etiqueta-archivos-bottom">STATUS</span><span class="estado-archivo">✓ compiled</span></aside><div class="editor-espacio"><div class="pestana-editor">App.tsx <span>×</span></div><div class="codigo-editor">${projectCodeExamples[seleccionadoProject.id].map((line, index) => `<div class="linea-codigo"><span class="numero-linea">0${index + 1}</span><span><em>${index === 0 ? "const" : index === 1 ? "if" : "return"}</em> ${line.replace(/^(const|if|return)\s+/, "")}</span></div>`).join("")}<div class="linea-codigo codigo-silenciado"><span class="numero-linea">04</span><span>// ship small, make it feel immediate</span></div><div class="cursor-editor"></div></div></div><div class="vista-previa-espacio"><div class="etiqueta-vista-previa"><span>PREVIEW</span><span>● 127.0.0.1</span></div>${renderProjectPreview(seleccionadoProject.id)}</div></div><div class="pie-espacio"><span>⌘ / ctrl + enter to run</span><span>0 errors&nbsp;&nbsp; 0 warnings</span></div></div>`));
    const workspace = document.getElementById("workspace");
    cargarVistaProyecto(seleccionadoProject.id, workspace);
    ((workspace.innerHTML = workspace.innerHTML
        .replaceAll("live preview", "vista Previa")
        .replaceAll("PROJECT /", "PROYECTO /")
        .replaceAll("FILES", "ARCHIVOS")
        .replaceAll("STATUS", "ESTADO")
        .replaceAll("compiled", "compilado")
        .replaceAll("PREVIEW", "VISTA PREVIA")
        .replaceAll("errors", "errores")
        .replaceAll("warnings", "advertencias")
        .replaceAll("ctrl + enter to run", "ctrl + enter para ejecutar")),
        (() => {
            const projectPreview = workspace.querySelector(".vista-previa-espacio .vista-previa");
            projectPreview &&
                (projectPreview.setAttribute("tabindex", "0"),
                projectPreview.setAttribute("role", "button"),
                projectPreview.setAttribute("aria-label", "Ampliar vista previa del proyecto"),
                projectPreview.insertAdjacentHTML(
                    "afterend",
                    '<button class="quitar-ampliacion" type="button" aria-label="Quitar ampliación">Quitar ampliación</button>',
                ),
                (() => {
                    const quitarAmpliacion = workspace.querySelector(".quitar-ampliacion");
                    const dialogoProyecto = document.getElementById("project-dialog");
                    let lugarOriginal;
                    const quitarVistaAmpliada = () => {
                        projectPreview.classList.remove("vista-ampliada");
                        dialogoProyecto.classList.remove("imagen-ampliada");
                        dialogoProyecto.querySelector(".contenido-dialogo").classList.remove("informacion-desenfocada");
                        if (lugarOriginal) {
                            lugarOriginal.replaceWith(projectPreview);
                            projectPreview.insertAdjacentElement("afterend", quitarAmpliacion);
                            lugarOriginal = null;
                        }
                        projectPreview.focus();
                    };
                    const ampliarVista = () => {
                        if (projectPreview.tagName === "IMG") {
                            lugarOriginal = document.createComment("lugar-vista-previa");
                            projectPreview.replaceWith(lugarOriginal);
                            document.body.append(projectPreview, quitarAmpliacion);
                        }
                        projectPreview.classList.add("vista-ampliada");
                        dialogoProyecto.classList.add("imagen-ampliada");
                        dialogoProyecto.querySelector(".contenido-dialogo").classList.add("informacion-desenfocada");
                    };
                    projectPreview.addEventListener("click", () =>
                        projectPreview.classList.contains("vista-ampliada") ? quitarVistaAmpliada() : ampliarVista(),
                    );
                    projectPreview.addEventListener("keydown", event => {
                        (event.key === "Enter" || event.key === " ") &&
                            (event.preventDefault(),
                            projectPreview.classList.contains("vista-ampliada")
                                ? quitarVistaAmpliada()
                                : ampliarVista());
                    });
                    quitarAmpliacion.addEventListener("click", event => {
                        event.stopPropagation();
                        quitarVistaAmpliada();
                    });
                })());
        })(),
        (document.getElementById("project-dialog").hidden = !1),
        (document.body.style.overflow = "hidden"),
        document.getElementById("project-dialog").classList.remove("cierre-dialogo"),
        document.getElementById("project-dialog").classList.add("apertura-dialogo"));
}
function closeProjectDialog() {
    const dialog = document.getElementById("project-dialog");
    (dialog.classList.remove("apertura-dialogo"),
        dialog.classList.add("cierre-dialogo"),
        (document.body.style.overflow = ""),
        setTimeout(() => {
            dialog.hidden = !0;
            dialog.classList.remove("cierre-dialogo");
        }, 220));
}
document.getElementById("grilla-habilidades").innerHTML = [
    skillLevels.slice(0, 5),
    skillLevels.slice(5, 10),
    skillLevels.slice(10, 15),
]
    .map(
        skillColumn =>
            `<div class="columna-habilidades">${skillColumn.map(([skillName, value, shortCode]) => `<div class="fila-habilidad"><div class="etiqueta-habilidad"><span><span class="marca-tecnologia tecnologia-clara">${shortCode}</span>${skillName}</span><small>${value}%</small></div><div class="pista-habilidad"><div style="width: ${value}%"></div></div></div>`).join("")}</div>`,
    )
    .join("");
renderVisibleProjects();
document.querySelector(".anterior").addEventListener("click", () => {
    ((activaProjectIndex = (activaProjectIndex + projects.length - 1) % projects.length), renderVisibleProjects());
});
document.querySelector(".siguiente").addEventListener("click", () => {
    ((activaProjectIndex = (activaProjectIndex + 1) % projects.length), renderVisibleProjects());
});
document.querySelectorAll("[data-scroll]").forEach(button =>
    button.addEventListener("click", () => {
        const navegacionMovil = document.querySelector(".navegacion-movil"),
            botonMenu = document.querySelector(".boton-menu");
        navegacionMovil.classList.remove("esta-abierta");
        botonMenu.setAttribute("aria-expanded", "false");
        botonMenu.textContent = "☰";
        if (button.closest("#project-dialog")) {
            closeProjectDialog();
            window.setTimeout(() => scrollToSection(button.dataset.scroll), 230);
            return;
        }
        scrollToSection(button.dataset.scroll);
    }),
);
document
    .querySelectorAll("[data-focus]")
    .forEach(focusButton =>
        focusButton.addEventListener("click", () => document.getElementById(focusButton.dataset.focus)?.focus()),
    );
document.querySelector(".boton-menu").addEventListener("click", event => {
    const menuButton = event.currentTarget,
        menuOpen = document.querySelector(".navegacion-movil").classList.toggle("esta-abierta");
    (menuButton.setAttribute("aria-expanded", menuOpen), (menuButton.textContent = menuOpen ? "×" : "☰"));
});
document.getElementById("close-dialog").addEventListener("click", closeProjectDialog);
document.getElementById("project-dialog").addEventListener("mousedown", event => {
    event.target === event.currentTarget && closeProjectDialog();
});
document.addEventListener("mousedown", event => {
    const vistaAmpliada = document.querySelector(".vista-previa.vista-ampliada"),
        elementoPulsado = event.target;
    if (
        vistaAmpliada &&
        elementoPulsado instanceof Element &&
        !vistaAmpliada.contains(elementoPulsado) &&
        !elementoPulsado.closest(".quitar-ampliacion")
    ) {
        vistaAmpliada.click();
    }
});
document.addEventListener("keydown", event => {
    event.key === "Escape" && closeProjectDialog();
});
document.getElementById("formulario-contacto").addEventListener("submit", event => {
    (event.preventDefault(),
        (event.currentTarget.innerHTML =
            '<div class="estado-envio"><strong>Mensaje recibido.</strong><span>Gracias. Me pondré en contacto pronto.</span></div>'));
});
const updateScrollProgress = () => {
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight,
        progress = scrollableHeight ? (window.scrollY / scrollableHeight) * 100 : 0;
    document.querySelector(".barra-progreso").style.width = `${progress}%`;
    const glitchNode = document.querySelector(".interferencia-nodo");
    (glitchNode.setAttribute("class", `interferencia-nodo paso-interferencia-${Math.floor(window.scrollY / 220) % 3}`),
        (glitchNode.style.transform = `translate3d(${Math.round(progress * 1.8) % 18}px, ${-Math.round(progress * 1.8) / 2}px, 0)`));
};
window.addEventListener("scroll", updateScrollProgress, { passive: !0 });
const reveladoObserver = new IntersectionObserver(
    entries =>
        entries.forEach(entry => {
            entry.isIntersecting && entry.target.classList.add("es-visible");
        }),
    { threshold: 0.12 },
);
document.querySelectorAll(".revelado").forEach(element => reveladoObserver.observe(element));
const navegacionObserver = new IntersectionObserver(
    entries =>
        entries.forEach(entry => {
            entry.isIntersecting && actualizarNavegacionActiva(entry.target.id);
        }),
    { rootMargin: "-35% 0px -55%", threshold: 0 },
);
document.querySelectorAll("main section[id]").forEach(section => navegacionObserver.observe(section));
const typedIntro = "Creo interfaces, servicios, programas y mas.",
    typedTitleElement = document.getElementById("typed-title"),
    typedTitleWrapper = typedTitleElement.parentElement,
    setTypedTitle = title => {
        ((typedTitleElement.textContent = title), (typedTitleWrapper.dataset.text = title));
    };
let typedCharacterIndex = 0;
if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) setTypedTitle(typedIntro);
else {
    const animationTimer = window.setInterval(() => {
        (setTypedTitle(typedIntro.slice(0, ++typedCharacterIndex)),
            typedCharacterIndex >= typedIntro.length && clearInterval(animationTimer));
    }, 46);
}
updateScrollProgress();
