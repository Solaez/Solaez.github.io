<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../../php/baseDatos.php';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $categorias = $_POST['categorias'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $lugar = $_POST['lugar'];
    $precio = $_POST['precio'];
    $precio2 = $_POST['precio2'];
    $estado = $_POST['estado'];

    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . '/1pagina civil/sitios/productoCivil/';

    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $uploadedFiles = array();
    $uploadOk = 1;

    for ($i = 1; $i <= 4; $i++) {
        $fileInputName = "imagen{$i}";

        if (!empty($_FILES[$fileInputName]['name'])) {
            // Generar nuevo nombre para el archivo
            $randomNumbers = rand(10, 99); // Generar dos números aleatorios
            $imageFileType = strtolower(pathinfo($_FILES[$fileInputName]['name'], PATHINFO_EXTENSION));
            $newFileName = $nombre . "_" . $randomNumbers . "." . $imageFileType;
            $target_file = $uploadDirectory . $newFileName;

            // Verificar si el archivo de imagen es una imagen real o falsa
            $check = getimagesize($_FILES[$fileInputName]["tmp_name"]);
            if ($check === false) {
                echo "El archivo {$fileInputName} no es una imagen.<br>";
                $uploadOk = 0;
                continue;
            }

            // Permitir ciertos formatos de archivo
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Lo siento, sólo se permiten archivos JPG, JPEG, PNG y GIF para {$fileInputName}.<br>";
                $uploadOk = 0;
                continue;
            }

            // Intentar subir el archivo
            if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file)) {
                echo "";
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

        $sql = "INSERT INTO productos (nombre, categorias, imagen1, imagen2, imagen3, imagen4, descripcion, tipo, lugar, precio, precio2, estado) 
                VALUES ('$nombre', '$categorias', '$imagen1', '$imagen2', '$imagen3', '$imagen4', '$descripcion', '$tipo', '$lugar', '$precio', '$precio2', '$estado')";

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
