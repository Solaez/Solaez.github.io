
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Producciones Leon</title>
    <link rel="icon" href="/1pagina militar/img/iconos/LOGO hd.png">
    <!--Setilos-->
    <link rel="stylesheet" href="/1pagina militar/css/header-bar.css">
    <link rel="stylesheet" href="/1pagina militar/css/nav-slider.css">
    <link rel="stylesheet" href="/1pagina militar/css/section.css">
    <link rel="stylesheet" href="/1pagina militar/css/article.css">
    <link rel="stylesheet" href="/1pagina militar/css/footer.css">
    <link rel="stylesheet" href="/1pagina militar/css/whatsapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/1pagina militar/css/sitio-prod.css">
    <link rel="stylesheet" href="/1pagina militar/css/pedir-producto.css">
    <link rel="stylesheet" href="/css/chat.css">
    <!-- <link rel="stylesheet" href="/css/loader.css"> -->
    <!--fin-->
    <style>
      .categories a.active {
          font-weight: bold;
      }

      .categories-menu li.active {
          font-weight: bold;
          background-color: #f3f3f3;
          transform: translateX(10px);
      }
      .categories-menu a.active {
          font-weight: bold;
      }
      footer {
    position: relative;
    top: 0;
    background-color: #383838;
    color: #bbb;
    line-height: 1.5;
}
    </style>
    <style>
        .marioooo {
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 0;
            gap: 20px;
            overflow: hidden;
        }
        #canvasContainer {
            width: 500px;
            height: 500px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .editor {    
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* gap: 20px; */
            padding: 20px;
            /* border: 1px solid #ccc; */
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 92px;
        }
        .editor img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .controls {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 400px;
            max-width: 400px;
            overflow: overlay;
            margin: 10px 0 0 0;
            flex-wrap: wrap;
        }
        .controls input {
            margin: 5px;
            width: 150px;
        }
        .screenshot-button, .add-texture-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .screenshot-button:hover, .add-texture-button:hover {
            background-color: #0056b3;
        }
        .texture-controls {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            background-color: #fafafa;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 172px;
        }
        .texture-controls img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            display: block;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .texture-controls input[type="range"] {
            width: 100%;
        }
        .remove-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .remove-button:hover {
            background-color: #c82333;
        }
        button.btn-regresar:hover {
            background: #c5c5c5;
        }
        button.btn-regresar {
            position: absolute;
            margin: 0 120rex 57rex 0;
            background: #d3d3d3;
            border-radius: 9px;
            padding: 5px;
            border: transparent;
            cursor: pointer;
            font-size: 20px;
            
        }
    </style>
</head>
<body >
  
    <!--Header Barra de navegación-->
    <?php require '../../1pagina militar/src/header.php'; ?>





<!--Contenido de la pagina-->
<div class="marioooo" >
<button id="backButton" class="btn-regresar" >↩</button>

<div id="canvasContainer"></div>

<!-- Editor para la textura y carga de imagen -->
 <div class="editor2" >
<div class="editor">
    <!-- <h2>Textura Base</h2>
    <img id="texturePreview" src="Design.jpg" alt="Textura por defecto"> -->
    <!-- <label for="imageUpload">Seleccionar imagen para superponer:</label> -->
    <input type="file" id="imageUpload" accept="image/*">
    <button class="screenshot-button" id="captureButton">Capturar y Descargar</button>
</div>

<div id="textureContainer" class="controls">
    <!-- Los controles para cada textura se agregarán aquí dinámicamente -->
</div>
</div>

<!-- Botón para capturar pantalla -->

<!-- Incluye Three.js y OrbitControls -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

<script>
    document.getElementById('backButton').addEventListener('click', function() {
        window.history.back();
    });
</script>


<script>
    let scene, camera, renderer, model, controls;
    let baseTexture, combinedTexture;
    let textures = [];
    let canvas, context;

    // Inicialización de la escena
    function init() {
        // Crear escena
        scene = new THREE.Scene();
        camera = new THREE.PerspectiveCamera(75, 500 / 500, 0.1, 1000);
        renderer = new THREE.WebGLRenderer();
        renderer.setSize(500, 500);
        renderer.setClearColor(0xd3d3d3);  // Fondo gris claro
        document.getElementById('canvasContainer').appendChild(renderer.domElement);

        // Añadir luz direccional con menor intensidad
        const directionalLight = new THREE.DirectionalLight(0xffffff, 0.4);  // Menor intensidad
        directionalLight.position.set(5, 10, 7.5);
        scene.add(directionalLight);

        // Añadir luz hemisférica para una iluminación más uniforme
        const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.7);  // Luz de arriba y abajo
        hemiLight.position.set(0, 10, 0);
        scene.add(hemiLight);

        // Cargar la textura base "Design.jpg"
        const textureLoader = new THREE.TextureLoader();
        baseTexture = textureLoader.load('Design.jpg', function (texture) {
            if (model) {
                applyBaseTexture(texture);
            }
        });

        // Cargar el modelo GLB
        const loader = new THREE.GLTFLoader();
        loader.load('mi_modelo.glb', function(gltf) {
            model = gltf.scene;

            // Ajustar posición del modelo
            const box = new THREE.Box3().setFromObject(model);
            const center = box.getCenter(new THREE.Vector3());
            model.position.x += (model.position.x - center.x);
            model.position.y += (model.position.y - center.y);
            model.position.z += (model.position.z - center.z);

            scene.add(model);

            if (baseTexture) {
                applyBaseTexture(baseTexture);
            }
        });

        // Posicionar la cámara
        camera.position.z = 2.5;

        // Añadir OrbitControls para permitir la interacción con el modelo
        controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;  // Habilita el suavizado de los movimientos
        controls.dampingFactor = 0.1;
        controls.screenSpacePanning = false;  // Evitar que la cámara se mueva hacia arriba/abajo con clic izquierdo
        controls.maxPolarAngle = Math.PI / 2;  // Limitar la rotación en el eje Y

        animate();
    }

    // Aplicar la textura base al modelo
    function applyBaseTexture(texture) {
        model.traverse((child) => {
            if (child.isMesh) {
                // Crear un canvas para combinar texturas
                canvas = document.createElement('canvas');
                canvas.width = texture.image.width;
                canvas.height = texture.image.height;
                context = canvas.getContext('2d');
                context.translate(0, canvas.height);  // Mover el origen al fondo del canvas
                context.scale(1, -1);  // Invertir verticalmente
                context.drawImage(texture.image, 0, 0);
                
                // Crear la textura combinada
                combinedTexture = new THREE.CanvasTexture(canvas);
                child.material.map = combinedTexture;
                child.material.needsUpdate = true;  // Actualizar el material
            }
        });
    }

    // Animación del render
    function animate() {
        requestAnimationFrame(animate);
        controls.update();  // Actualiza los controles en cada frame
        renderer.render(scene, camera);
    }

    // Manejar la carga de nuevas imágenes para superponer
    const imageUpload = document.getElementById('imageUpload');
    imageUpload.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file && model) {
            const url = URL.createObjectURL(file);
            addTextureControls(url);
        }
    });

    // Añadir controles de textura
    function addTextureControls(imageUrl) {
        const textureContainer = document.getElementById('textureContainer');

        // Crear un nuevo conjunto de controles
        const textureDiv = document.createElement('div');
        textureDiv.className = 'texture-controls';

        const previewImage = document.createElement('img');
        previewImage.src = imageUrl;
        textureDiv.appendChild(previewImage);

        const xOffsetLabel = document.createElement('label');
        xOffsetLabel.textContent = 'Desplazar X:';
        textureDiv.appendChild(xOffsetLabel);

        const xOffsetInput = document.createElement('input');
        xOffsetInput.type = 'range';
        xOffsetInput.min = '-1';
        xOffsetInput.max = '1';
        xOffsetInput.step = '0.01';
        xOffsetInput.value = '0.2';
        textureDiv.appendChild(xOffsetInput);

        const yOffsetLabel = document.createElement('label');
        yOffsetLabel.textContent = 'Desplazar Y:';
        textureDiv.appendChild(yOffsetLabel);

        const yOffsetInput = document.createElement('input');
        yOffsetInput.type = 'range';
        yOffsetInput.min = '-1';
        yOffsetInput.max = '1';
        yOffsetInput.step = '0.01';
        yOffsetInput.value = '0.5';
        textureDiv.appendChild(yOffsetInput);

        const scaleLabel = document.createElement('label');
        scaleLabel.textContent = 'Escalar:';
        textureDiv.appendChild(scaleLabel);

        const scaleInput = document.createElement('input');
        scaleInput.type = 'range';
        scaleInput.min = '0.1';
        scaleInput.max = '3';
        scaleInput.step = '0.1';
        scaleInput.value = '1';
        textureDiv.appendChild(scaleInput);

        // Botón para eliminar la textura
        const removeButton = document.createElement('button');
        removeButton.textContent = '✕';
        removeButton.className = 'remove-button';
        textureDiv.appendChild(removeButton);

        // Guardar la textura
        const texture = new THREE.TextureLoader().load(imageUrl);
        const textureObject = {
            texture: texture,
            preview: previewImage,
            xOffset: xOffsetInput,
            yOffset: yOffsetInput,
            scale: scaleInput,
            element: textureDiv
        };
        textures.push(textureObject);

        textureContainer.appendChild(textureDiv);

        // Actualizar la textura al cambiar valores
        xOffsetInput.addEventListener('input', updateTextures);
        yOffsetInput.addEventListener('input', updateTextures);
        scaleInput.addEventListener('input', updateTextures);

        // Eliminar la textura
        removeButton.addEventListener('click', () => {
            textures = textures.filter(t => t !== textureObject);  // Eliminar la textura del array
            textureDiv.remove();  // Eliminar los controles de la vista
            updateTextures();  // Actualizar el canvas
        });

        // Actualizar la textura en el modelo
        updateTextures();
    }

    // Actualizar todas las texturas superpuestas
    function updateTextures() {
        if (!combinedTexture || !model) return;

        // Crear un canvas para combinar texturas
        canvas = document.createElement('canvas');
        canvas.width = combinedTexture.image.width;
        canvas.height = combinedTexture.image.height;
        context = canvas.getContext('2d');
        context.translate(0, canvas.height);  // Mover el origen al fondo del canvas
        context.scale(1, -1);  // Invertir verticalmente

        // Dibujar la textura base
        context.drawImage(baseTexture.image, 0, 0);

        // Dibujar todas las texturas superpuestas
        textures.forEach(({ texture, xOffset, yOffset, scale }) => {
            const x = parseFloat(xOffset.value) * canvas.width;
            const y = parseFloat(yOffset.value) * canvas.height;
            const s = parseFloat(scale.value);

            context.drawImage(texture.image, x, y, texture.image.width * s, texture.image.height * s);
        });

        // Aplicar la textura combinada al modelo
        combinedTexture = new THREE.CanvasTexture(canvas);

        model.traverse((child) => {
            if (child.isMesh) {
                child.material.map = combinedTexture;
                child.material.needsUpdate = true;  // Actualizar el material
            }
        });
    }

    // Capturar pantalla del modelo 3D y descargarla
    const captureButton = document.getElementById('captureButton');
    captureButton.addEventListener('click', () => {
        // Asegurarse de que el renderizado está completo
        renderer.render(scene, camera);

        // Renderizar la imagen en un canvas oculto
        const screenshotCanvas = document.createElement('canvas');
        screenshotCanvas.width = renderer.domElement.width;
        screenshotCanvas.height = renderer.domElement.height;
        const screenshotContext = screenshotCanvas.getContext('2d');
        screenshotContext.drawImage(renderer.domElement, 0, 0);

        // Obtener la imagen como data URL
        const dataURL = screenshotCanvas.toDataURL('image/png');

        // Descargar la imagen
        const downloadLink = document.createElement('a');
        downloadLink.href = dataURL;
        downloadLink.download = 'captura.png';  // Nombre del archivo descargado
        downloadLink.click();
    });

    // Iniciar la escena
    init();
</script>
</div>

















  <!--pedir producto-->
  <article>
    <div id="popup" class="popup">
      <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <h2>Comprar producto</h2>
        <p>¿Estás seguro de que desea comprar el producto?</p>
        <center><img src="/1pagina militar/img/iconos/producto.png"></center>
        <a id="whatsappLink" href="#"><button id="buyButton">Pedir Producto</button></a>
        <img src="" alt=""  >
      </div>
    </div>
  </article>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      const buyButton = document.getElementById('buyButton');
      
      buyButton.addEventListener('click', function() {
        const currentPageUrl = window.location.href;
        const phoneNumber = "+573008645571";
        const text = `Me interesa adquirir este producto, ¿Podrías proporcionarme información sobre su precio? ${currentPageUrl}`;
        
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        var whatsappLink;
        
        if (isMobile) {
          whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(text)}`;
        } else {
          whatsappLink = `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(text)}`;
        }
        
        document.getElementById('whatsappLink').href = whatsappLink;
      });
    });
</script>

    <!--Mensajes-->
    <?php require '../../1pagina militar/src/help.php'; ?>

    <!--Whatsapp-->
    <?php require '../../1pagina militar/src/whatsapp.php'; ?>
    
    <!--footer-->
    <?php require '../../1pagina militar/src/footer.php'; ?>

<!--Scripts-->
<script src="/js/chat.js"></script>
<!--PRODUCTOS
------------------------------------------------------------------------------------------------------->
<script src="/1pagina militar/js/id-productos.js"></script>
<!-- <script src="/js/loader.js"></script> -->
<script src="/1pagina militar/js/header-bar.js"></script>
<script src="/1pagina militar/js/article.js"></script>
<script src="/1pagina militar/js/whatsapp.js"></script>
<!--Fin-->

</body>
</html>

<!--cursor-->
<?php require '../../1pagina militar/src/cursor.php'; ?>