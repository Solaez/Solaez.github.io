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
</style>
</head>
<body>

<h2>Editar Producto</h2>

<?php
// Verificar si se recibió un ID válido del producto
if (!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])) {
    echo '<p style="color: red;">ID de producto no válido.</p>';
    exit;
}

// Obtener el ID del producto desde el parámetro GET
$id_producto = $_GET['id'];

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

// Obtener los datos del producto según el ID proporcionado
$sql = "SELECT * FROM productos WHERE id_producto = $id_producto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Obtener los datos del producto

    // Mostrar el formulario para editar el producto
    echo '<form action="actualizar_producto.php" method="post" enctype="multipart/form-data">';
    echo '<input type="hidden" name="id_producto" value="' . htmlspecialchars($id_producto) . '">';

    echo '<label for="nombre">Nombre:</label>';
    echo '<input type="text" id="nombre" name="nombre" value="' . htmlspecialchars($row['nombre']) . '" required><br>';

    echo '<label for="categorias">Categorías:</label>';
    echo '<input type="text" id="categorias" name="categorias" value="' . htmlspecialchars($row['categorias']) . '"><br>';

    echo '<label for="descripcion">Descripción:</label>';
    echo '<textarea id="descripcion" name="descripcion" rows="4">' . htmlspecialchars($row['descripcion']) . '</textarea><br>';

    echo '<label for="tipo">Tipo:</label>';
    echo '<input type="text" id="tipo" name="tipo" value="' . htmlspecialchars($row['tipo']) . '"><br>';

    echo '<label for="lugar">Lugar:</label>';
    echo '<input type="text" id="lugar" name="lugar" value="' . htmlspecialchars($row['lugar']) . '"><br>';

    echo '<label for="precio">Precio:</label>';
    echo '<input type="text" id="precio" name="precio" value="' . htmlspecialchars($row['precio']) . '"><br>';

    echo '<label for="precio2">Precio 2:</label>';
    echo '<input type="text" id="precio2" name="precio2" value="' . htmlspecialchars($row['precio2']) . '"><br>';

    echo '<input type="submit" value="Actualizar">';
    echo '</form>';

} else {
    echo '<p style="color: red;">No se encontró el producto.</p>';
}

// Cerrar conexión
$conn->close();
?>

</body>
</html>
