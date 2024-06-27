<?php
// Verificar si se recibió datos del formulario POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $ubicacion = $_POST['ubicacion'];
    $precio = $_POST['precio'];
    $precio_promocion = $_POST['precio_promocion'];
    $promocion = $_POST['promocion'];

    // Configuración de la conexión a la base de datos
 require '../../php/baseDatos.php';
    

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para actualizar el producto
    $sql = "UPDATE militar SET nombre='$nombre', categorias='$categoria', descripcion='$descripcion', tipo='$tipo', lugar='$ubicacion', precio='$precio', precio2='$precio_promocion', estado='$promocion' WHERE id_producto=$id_producto";

    if ($conn->query($sql) === TRUE) {
        // Manejar las imágenes
        $uploadDir = '/1pagina militar/sitios/productoMilitar/';
        for ($i = 1; $i <= 4; $i++) {
            $imagen = 'imagen' . $i;
            if (isset($_FILES[$imagen]) && $_FILES[$imagen]['error'] == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES[$imagen]['tmp_name'];
                $name = basename($_FILES[$imagen]['name']);
                $uploadFile = $uploadDir . $name;
                if (move_uploaded_file($tmp_name, $_SERVER['DOCUMENT_ROOT'] . $uploadFile)) {
                    $sql = "UPDATE militar SET $imagen='$uploadFile' WHERE id_producto=$id_producto";
                    if ($conn->query($sql) !== TRUE) {
                        echo "Error al actualizar la imagen $i: " . $conn->error . "<br>";
                    }
                } else {
                    echo "Error al mover la imagen $i al directorio de destino.<br>";
                }
            }
        }
        
        // Redirigir al usuario a 'actualizado.php' después de una actualización exitosa
        header("Location: actualizado.php");
        exit; // Asegúrate de terminar la ejecución del script después de la redirección
    } else {
        echo "Error al actualizar el producto: " . $conn->error . "<br>";
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
