<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Producto</title>
<style>
    label {
        display: block;
        margin-top: 10px;
    }
    .imagenes {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: -20px;
    }
    .form-group p {
        color: rgb(256, 256, 256, .3);
        opacity: 0;
        /* display: none; */
        position: absolute;
        margin: -43px 350px;
        background: transparent;
        padding: 8px;
        border-radius: 0 20px 20px 0;
        transform: translateX(-60px);
        transition: opacity .2s,box-shadow .8s,transform .2s ;
    }
    .form-group:hover p{
        opacity: 1;
        box-shadow: 12px 1px 10px 0px #2700ff;
        transform: translateX(0px);
    }
    select#promocion {
        background-color: #131313;
    }
    input,select{
        transition: box-shadow .7s ;
    }
    input:hover, select:hover {
        box-shadow: inset 2px 5px 10px #2700ff;
    }
    
</style>
</head>
<body>


<?php
// Verificar si se recibió un ID válido del producto
if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    echo '<p style="color: red;">ID de producto no válido.</p>';
    exit;
}

// Obtener el ID del producto desde el parámetro GET
$id_producto = $_GET['id'];

// Configuración de la conexión a la base de datos
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "productos";
 require '../../php/baseDatos.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del producto según el ID proporcionado
$sql = "SELECT * FROM productos WHERE id_producto = $id_producto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Obtener los datos del producto

    // Mostrar el formulario para editar el producto
    echo '<form action="/1pagina civil/add/actualizar_producto.php" method="post" enctype="multipart/form-data">';
    echo '<input type="hidden" name="id_producto" value="' . htmlspecialchars($id_producto) . '">';

    echo '<div class="imagenes">';
    echo '<div class="imagenesPequeñas">';
    for ($i = 2; $i <= 4; $i++) {
        $imagen = 'imagen' . $i;
        $imagenSrc = !empty($row[$imagen]) ? $row[$imagen] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png';
        echo '<div>';
        echo '<label class="custum-file-upload2" for="' . $imagen . '">';
        echo '<div class="icon"><img id="imagePreview' . $i . '" src="' . htmlspecialchars($imagenSrc) . '" alt=""></div>';
        echo '<div class="text"><span>Seleccione la imagen ' . $i . '</span></div>';
        echo '<input type="file" id="' . $imagen . '" name="' . $imagen . '" onchange="previewImage(event, \'imagePreview' . $i . '\')">';
        echo '</label></div>';
    }
    echo '</div>';

    $imagen1 = !empty($row['imagen1']) ? $row['imagen1'] : 'https://img.icons8.com/external-dashed-line-kawalan-studio/96/external-upload-document-user-interface-dashed-line-kawalan-studio.png';
    echo '<label class="custum-file-upload" for="imagen1">';
    echo '<div class="icon"><img id="imagePreview" src="' . htmlspecialchars($imagen1) . '" alt=""></div>';
    echo '<div class="text"><span>Seleccione Imagen Principal</span></div>';
    echo '<input type="file" id="imagen1" name="imagen1" onchange="previewImage(event, \'imagePreview\')" style="display: none;">';
    echo '</label>';

    echo '<div class="marcoDerecha">';
    echo '<div class="form-group"><input placeholder="Nombre" class="input" type="text" name="nombre" id="nombre" value="' . htmlspecialchars($row['nombre']) . '" required><p>Nombre</p></div>';
    echo '<div class="form-group"><input placeholder="Tipo" class="input" type="text" name="tipo" id="tipo" value="' . htmlspecialchars($row['tipo']) . '" required><p>Tipo</p></div>';
    echo '<div class="form-group"><input placeholder="Ubicación" class="input" type="text" name="ubicacion" id="ubicacion" value="' . htmlspecialchars($row['lugar']) . '" required><p>Ubicación</p></div>';
    echo '<div class="form-group"><input placeholder="Precio" class="input" type="text" name="precio" id="precio" value="' . htmlspecialchars($row['precio']) . '" required><p>Precio P. Opcional</p></div>';
    echo '<div class="form-group"><input placeholder="Precio Promoción" class="input" type="text" name="precio_promocion" id="precio_promocion" value="' . htmlspecialchars($row['precio2']) . '"><p>Precio Opcional</p></div>';
    echo '<div class="form-group"><input placeholder="Categoría" class="input" type="text" name="categoria" id="categoria" value="' . htmlspecialchars($row['categorias']) . '" required><p>Categoria</p></div>';
    // echo '<div class="form-group"><input placeholder="Estado" class="input" type="text" name="promocion" id="promocion" value="' . htmlspecialchars($row['estado']) . '"><p>Estado</p></div>';
    echo '<div class="form-group"><p>Estado</p>';
    echo '<select class="input" id="promocion" name="promocion">';

    $opcionesEstado = array(
        '' => 'Ninguno',
        'nuevo' => 'Nuevo',
        'promocion' => '¡Oferta!',
        'destacado' => 'Destacado',
        'agotado' => 'Agotado',
    );

    foreach ($opcionesEstado as $valor => $texto) {
        $selected = ($row['promocion'] == $valor) ? 'selected' : '';
        echo '<option value="' . htmlspecialchars($valor) . '" ' . $selected . '>' . htmlspecialchars($texto) . '</option>';
    }

    echo '</select>';
    echo '</div>';

    echo '</div></div>';

    echo '<div class="form-group"><textarea placeholder="Descripción" class="input" name="descripcion" id="descripcion" rows="3" required>' . htmlspecialchars($row['descripcion']) . '</textarea></div>';
    echo '<button type="submit" class="btn btn-primary">Guardar Cambios</button>';
    echo '</form>';
} else {
    echo '<p>No se encontró el producto.</p>';
}

// Cerrar conexión
$conn->close();
?>

<script>
function previewImage(event, previewId) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById(previewId);
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

</body>
</html>


