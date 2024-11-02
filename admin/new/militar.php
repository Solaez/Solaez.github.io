<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos - Producciones Leon</title>
    <link rel="icon" href="/img/iconos/admin.png">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="/admin/style.css">
</head>

<body>

    <div class="produccion">
        <div class="dashboard">
            <div>
                <div class="container">
                    <h1>Ingresar Productos Militares</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <!-- <div>
                    <input placeholder="ID" class="input" type="number" id="id" name="id" required>
                    </div> -->
                        <?php require '../../1pagina militar/add/ingresarProductos.php'; ?>
                        <div class="imagenes">

                            <div class="imagenesPequeñas">

                                <div>
                                    <label class="custum-file-upload2" for="imagen2">
                                        <div class="icon">
                                            <img id="imagePreview1" src="https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png" alt="">
                                        </div>
                                        <div class="text">
                                            <span>Seleccione la imagen 1</span>
                                        </div>
                                        <input type="file" id="imagen2" name="imagen2" onchange="previewImage(event, 'imagePreview1')" accept="image/*">
                                    </label>
                                </div>

                                <div>
                                    <label class="custum-file-upload2" for="imagen3">
                                        <div class="icon">
                                            <img id="imagePreview2" src="https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png" alt="">
                                        </div>
                                        <div class="text">
                                            <span>seleccione imagen 2</span>
                                        </div>
                                        <input type="file" id="imagen3" name="imagen3" onchange="previewImage(event, 'imagePreview2')" accept="image/*">
                                    </label>
                                </div>

                                <div>
                                    <label class="custum-file-upload2" for="imagen4">
                                        <div class="icon">
                                            <img id="imagePreview3" src="https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png" alt="">
                                        </div>
                                        <div class="text">
                                            <span>seleccione imagen 3</span>
                                        </div>
                                        <input type="file" id="imagen4" name="imagen4" onchange="previewImage(event, 'imagePreview3')" style="display: none;" accept="image/*">
                                    </label>
                                </div>
                            </div>

                            <label class="custum-file-upload" for="imagen1">
                                <div class="icon">
                                    <img id="imagePreview" src="https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png" alt="">
                                </div>
                                <div class="text">
                                    <span>Seleccione Imagen Principal</span>
                                </div>
                                <input type="file" id="imagen1" name="imagen1" required onchange="previewImage(event,'imagePreview')" style="display: none;" accept="image/*">
                            </label>


                            <div class="marcoDerecha">

                                <div>
                                    <input placeholder="Nombre" class="input" type="text" id="nombre" name="nombre" required>
                                </div>

                                <div>
                                    <input placeholder="tipo" class="input" type="text" id="tipo" name="tipo" required>
                                </div>

                                <div>
                                    <input placeholder="Ubicación" class="input" type="text" id="lugar" name="lugar" required>
                                </div>

                                <div>
                                    <input placeholder="Precio Viejo (opcional)" class="input" type="text" id="precio" name="precio" step="any">
                                </div>

                                <div>
                                    <input placeholder="Precio Actual (opcional)" class="input" type="text" id="precio2" name="precio2">
                                </div>


                                <div>
                                    <select class="input" id="categoriasSelect" name="categorias">

                                        <option value="">Categoria</option>
                                        <option value="acesorios">Acesorios</option>
                                        <option value="usoPersonal">Uso personal - aseo</option>
                                        <option value="complemento">Complemento</option>
                                        <option value="boinas">Boinas</option>
                                        <option value="bolsos">Bolsos</option>
                                        <option value="busos">Busos</option>
                                        <option value="casco">Casco</option>
                                        <option value="camisas">Camisas</option>
                                        <option value="conjuntos">Conjuntos</option>
                                        <option value="camibusos">Camibuso</option>
                                        <option value="pantalones">Pantalones</option>
                                        <option value="linternas">Linternas</option>
                                        <option value="tennis">Botas</option>
                                        <option value="estampados">Estampados</option>
                                        <option value="gorras">Gorras</option>
                                        <option value="guantes">Guantes</option>
                                        <option value="pavas">Pavas</option>
                                        <option value="policia">Ejercito y policia</option>
                                        <option value="rescate">Personal de rescate</option>
                                        <option value="privada">Seguridad privada</option>
                                        <option value="vial">Seguridad vial</option>
                                        <option value="insignias">Insignias y Parches</option>
                                        <option value="carpas">Carpas</option>
                                        <option value="banderas">Banderas</option>
                                        <option value="chalecos">Chalecos</option>
                                        <option value="entretenimiento">Entretenimiento</option>
                                        <option value="kit">KIT</option>
                                        <option value="otros">Otros</option>

                                    </select>
                                    <button type="button" id="addCategoria" style="display:none;">+</button>
                                </div>

                                <!-- Campo oculto para almacenar las categorías adicionales -->
                                <input type="hidden" name="categoriasAdicionales" id="categoriasInput" />

                                <!-- Mostrar las categorías adicionales seleccionadas -->
                                <div id="categoriasSeleccionadas"></div>

                                <script>
                                    document.getElementById('categoriasSelect').addEventListener('change', function() {
                                        const selectedValue = this.value;
                                        const addButton = document.getElementById('addCategoria');
                                        const categoriasSeleccionadas = document.getElementById('categoriasSeleccionadas');

                                        // Mostrar el botón "+" si hay una categoría seleccionada
                                        if (selectedValue) {
                                            addButton.style.display = 'inline';
                                        } else {
                                            addButton.style.display = 'none'; // Ocultar el botón si no hay nada seleccionado
                                        }

                                        // Actualizar la categoría seleccionada en la visualización
                                        // categoriasSeleccionadas.textContent = 'Categoría principal seleccionada: ' + selectedValue;
                                    });

                                    document.getElementById('addCategoria').addEventListener('click', function() {
                                        const select = document.getElementById('categoriasSelect');
                                        const selectedValue = select.value;
                                        const input = document.getElementById('categoriasInput');
                                        const categoriasSeleccionadas = document.getElementById('categoriasSeleccionadas');

                                        if (selectedValue) {
                                            // Concatenar la nueva categoría al campo oculto sin borrar las anteriores
                                            if (input.value) {
                                                input.value += ',' + selectedValue;
                                            } else {
                                                input.value = selectedValue;
                                            }

                                            // Actualizar las categorías adicionales seleccionadas
                                            categoriasSeleccionadas.textContent = ' ' + input.value;

                                            // Limpiar la selección del select para permitir agregar otra categoría
                                            select.value = '';

                                            // Ocultar el botón "+" si ya se han seleccionado más de 1 categoría
                                            if (input.value.split(',').length > 1) {
                                                document.getElementById('addCategoria').style.display = 'none';
                                            }
                                        }
                                    });
                                </script>


                                <div>
                                    <select class="input" id="estado" name="estado">
                                        <option value="">Estado</option>
                                        <option value="">Ninguno</option>
                                        <option value="nuevo">Nuevo</option>
                                        <option value="promocion">¡Oferta!</option>
                                        <option value="destacado">Destacado</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div>
                            <textarea placeholder="Descripción opcional" class="input" id="descripcion" name="descripcion"></textarea>
                        </div>

                        <input class="input2" type="submit" value="Guardar Producto">
                    </form>
                </div>
            </div>

        </div>
        <?php
        require '../../php/menu.php';
        ?>
    </div>
    </div>


    <?php
    require '../../admin/loading.php';
    ?>


    <script>
        function previewImage(event, previewId) {
            const input = event.target;
            const reader = new FileReader();
            const imagePreview = document.getElementById(previewId);

            reader.onload = function() {
                imagePreview.src = reader.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <script>
        // script.js

        document.querySelector('.search-bar input').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            document.querySelectorAll('.game-item').forEach(item => {
                const gameName = item.querySelector('p').textContent.toLowerCase();
                if (gameName.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
<!-- <?php require '../../php/NO.php'; ?> -->