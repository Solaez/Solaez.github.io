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
                <h1>Ingresar Productos Civil</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <!-- <div>
                    <input placeholder="ID" class="input" type="number" id="id" name="id" required>
                    </div> -->
                    <?php require '../../1pagina civil/add/ingresarProductos.php'; ?>
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
                                        <input type="file" id="imagen2" name="imagen2"  onchange="previewImage(event, 'imagePreview1')" accept="image/*" >
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
                                        <input type="file" id="imagen3" name="imagen3"  onchange="previewImage(event, 'imagePreview2')" accept="image/*">
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
                                        <input type="file" id="imagen4" name="imagen4"  onchange="previewImage(event, 'imagePreview3')" style="display: none;" accept="image/*">
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
                            <input placeholder="Nombre" class="input"  type="text" id="nombre" name="nombre" required>
                            </div>

                            <div>
                            <input placeholder="tipo" class="input"  type="text" id="tipo" name="tipo" required>
                            </div>

                            <div>
                                <input placeholder="Ubicación" class="input" type="text" id="lugar" name="lugar" required>
                            </div>

                            <div>
                                <input placeholder="Precio Viejo (poner espacio)" class="input" type="text" id="precio"  name="precio" step="any">
                            </div>

                            <div>
                                <input placeholder="Precio Actual (1,00)" class="input" type="text" id="precio2"  name="precio2">
                            </div>


                            <div>
                                <select class="input" id="categorias" name="categorias" required>
                                    <option value="">Categoria</option>
                                    <option value="acesorios">Acesorios</option>
                                    <option value="boinas">Boinas</option>
                                    <option value="bolsos">Bolsos</option>
                                    <option value="busos">Busos</option>
                                    <option value="casco">Casco</option>
                                    <option value="camisas,ropa">Camisas</option>
                                    <option value="camibusos,ropa">Camibuso</option>
                                    <option value="pantalones,ropa">Pantalones</option>
                                    <option value="tennis">Tennis</option>
                                    <option value="estampados">Estampados</option>
                                    <option value="gorras">Gorras</option>
                                    <option value="pavas">Pavas</option>
                                    <option value="policia">Ejercito y policia</option>
                                    <option value="rescate">Personal de rescate</option>
                                    <option value="privada">Seguridad privada</option>
                                    <option value="vial">Seguridad vial</option>
                                    <option value="insignias">Insignias y Parches</option>
                                </select>
                            </div>

                            <div>
                                <select class="input" id="estado" name="estado">
                                    <option value="">Estado</option>
                                    <option value="">Ninguno</option>
                                    <option value="nuevo">Nuevo</option>
                                    <option value="promocion">¡Oferta!</option>
                                    <option value="destacado">Destacado</option>
                                </select>
                            </div>
                            <!-- <div>
                                <select class="input" id="promocion" name="promocion">
                                    <option value="">Estado</option>
                                    <option value="">Ninguno</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="¡Oferta!">¡Oferta!</option>
                                    <option value="Destacado">Destacado</option>
                                </select>
                            </div> -->

                            </div>
                        </div>
    
                    <div>
                        <textarea placeholder="Descripción opcional" class="input" id="descripcion" name="descripcion"></textarea>
                    </div>
    
                    <input class="input2" type="submit" value="Guardar Producto" >
                </form>
            </div>
        </div>
        
    </div>
                <?php
                require '../../php/menu2.php';
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

<?php require '../../php/NO.php'; ?>

