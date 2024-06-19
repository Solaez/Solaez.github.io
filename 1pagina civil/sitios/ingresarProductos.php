<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario de ingreso de productos con carga de imágenes</title>
</head>
<body>

<h2>Ingrese un nuevo producto</h2>

<?php
// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "productos";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $categorias = $_POST['categorias'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $lugar = $_POST['lugar'];
    $precio = $_POST['precio'];
    $precio2 = $_POST['precio2'];

    // Directorio donde se guardarán las imágenes
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/1pagina civil/sitios/productoCivil/';

    // Crear el directorio si no existe
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Procesar las imágenes
    $uploadedFiles = array();
    $uploadOk = 1;

    for ($i = 1; $i <= 4; $i++) {
        $fileInputName = "imagen{$i}";

        if (!empty($_FILES[$fileInputName]['name'])) {
            $target_file = $uploadDirectory . basename($_FILES[$fileInputName]["name"]);

            // Verificar si el archivo de imagen es una imagen real o falsa
            $check = getimagesize($_FILES[$fileInputName]["tmp_name"]);
            if ($check === false) {
                echo "El archivo {$fileInputName} no es una imagen.<br>";
                $uploadOk = 0;
                continue;
            }

            // Verificar si el archivo ya existe
            if (file_exists($target_file)) {
                echo "Lo siento, el archivo {$fileInputName} ya existe.<br>";
                $uploadOk = 0;
                continue;
            }

            // Verificar el tamaño del archivo
            if ($_FILES[$fileInputName]["size"] > 500000) {
                echo "Lo siento, el archivo {$fileInputName} es demasiado grande.<br>";
                $uploadOk = 0;
                continue;
            }

            // Permitir ciertos formatos de archivo
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Lo siento, sólo se permiten archivos JPG, JPEG, PNG y GIF para {$fileInputName}.<br>";
                $uploadOk = 0;
                continue;
            }

            // Intentar subir el archivo
            if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file)) {
                echo "El archivo {$fileInputName} ha sido subido correctamente.<br>";
                $uploadedFiles[] = $target_file; // Guardar la ruta del archivo subido

            } else {
                echo "Lo siento, hubo un error al subir el archivo {$fileInputName}.<br>";
                $uploadOk = 0;
                continue;
            }
        }
    }

    // Si al menos una imagen se subió correctamente, insertar datos en la base de datos
    if (!empty($uploadedFiles)) {
        // Preparar consulta SQL para insertar datos
        $imagen1 = isset($uploadedFiles[0]) ? str_replace($_SERVER["DOCUMENT_ROOT"], '', $uploadedFiles[0]) : '';
        $imagen2 = isset($uploadedFiles[1]) ? str_replace($_SERVER["DOCUMENT_ROOT"], '', $uploadedFiles[1]) : '';
        $imagen3 = isset($uploadedFiles[2]) ? str_replace($_SERVER["DOCUMENT_ROOT"], '', $uploadedFiles[2]) : '';
        $imagen4 = isset($uploadedFiles[3]) ? str_replace($_SERVER["DOCUMENT_ROOT"], '', $uploadedFiles[3]) : '';

        $sql = "INSERT INTO productos (nombre, categorias, imagen1, imagen2, imagen3, imagen4, descripcion, tipo, lugar, precio, precio2) 
                VALUES ('$nombre', '$categorias', '$imagen1', '$imagen2', '$imagen3', '$imagen4', '$descripcion', '$tipo', '$lugar', '$precio', '$precio2')";

        if ($conn->query($sql) === TRUE) {
            echo '<p style="color: green;">Producto ingresado correctamente</p>';
        } else {
            echo '<p style="color: red;">Error al ingresar el producto: ' . $conn->error . '</p>';
        }
    }

    // Cerrar conexión
    $conn->close();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="categorias">Categorías:</label><br>
    <input type="text" id="categorias" name="categorias"><br><br>

    <label for="imagen1">Imagen 1:</label><br>
    <input type="file" id="imagen1" name="imagen1" accept="image/*"><br><br>

    <label for="imagen2">Imagen 2:</label><br>
    <input type="file" id="imagen2" name="imagen2" accept="image/*"><br><br>

    <label for="imagen3">Imagen 3:</label><br>
    <input type="file" id="imagen3" name="imagen3" accept="image/*"><br><br>

    <label for="imagen4">Imagen 4:</label><br>
    <input type="file" id="imagen4" name="imagen4" accept="image/*"><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" rows="4"></textarea><br><br>

    <label for="tipo">Tipo:</label><br>
    <input type="text" id="tipo" name="tipo"><br><br>

    <label for="lugar">Lugar:</label><br>
    <input type="text" id="lugar" name="lugar"><br><br>

    <label for="precio">Precio:</label><br>
    <input type="text" id="precio" name="precio"><br><br>

    <label for="precio2">Precio 2:</label><br>
    <input type="text" id="precio2" name="precio2"><br><br>

    <input type="submit" name="submit" value="Guardar producto">
</form>

</body>
</html>
