<?php
// Verificar si se recibió un ID de producto válido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_producto'])) {
    // Recibir el ID del producto a eliminar
    $id_producto = $_POST['id_producto'];

    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "productos";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para eliminar el producto
    $sql = "DELETE FROM productos WHERE id_producto = $id_producto";

    if ($conn->query($sql) === TRUE) {
        echo "Producto eliminado correctamente.";
        header("Location: /admin/edit/borrarCivil.php");
        exit; // Asegúrate de terminar la ejecución del script después de la redirección
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>