<?php
// Verificar si se recibió datos del formulario POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $categorias = $_POST['categorias'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $lugar = $_POST['lugar'];
    $precio = $_POST['precio'];
    $precio2 = $_POST['precio2'];
    $estado = $_POST['estado'];

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "productos";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para actualizar el producto
    $sql = "UPDATE productos SET nombre='$nombre', categorias='$categorias', descripcion='$descripcion', tipo='$tipo', lugar='$lugar', precio='$precio', precio2='$precio2', estado='$estado' WHERE id_producto=$id_producto";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: actualizado.php");
        exit; // Asegúrate de terminar la ejecución del script después de la redirección
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
