<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de Productos</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<h2>Lista de Productos</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <label for="categoria">Buscar por Categoría:</label>
    <input type="text" id="categoria" name="categoria">
    <input type="submit" value="Buscar">
</form>

<?php
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

// Consulta SQL para obtener todos los productos o filtrar por categoría
$sql = "SELECT * FROM productos";
if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
    $categoria = $conn->real_escape_string($_GET['categoria']);
    $sql .= " WHERE categorias LIKE '%$categoria%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Nombre</th><th>Categorías</th><th>Descripción</th><th>Tipo</th><th>Lugar</th><th>Precio</th><th>Precio 2</th><th>Imágenes</th><th>Acciones</th></tr>';
    
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['categorias']) . '</td>';
        echo '<td>' . htmlspecialchars($row['descripcion']) . '</td>';
        echo '<td>' . htmlspecialchars($row['tipo']) . '</td>';
        echo '<td>' . htmlspecialchars($row['lugar']) . '</td>';
        echo '<td>' . htmlspecialchars($row['precio']) . '</td>';
        echo '<td>' . htmlspecialchars($row['precio2']) . '</td>';
        echo '<td>';
        if (!empty($row['imagen1'])) {
            echo '<img src="' . htmlspecialchars($row['imagen1']) . '" alt="Imagen 1" style="width:100px;">';
        }
        if (!empty($row['imagen2'])) {
            echo '<img src="' . htmlspecialchars($row['imagen2']) . '" alt="Imagen 2" style="width:100px;">';
        }
        if (!empty($row['imagen3'])) {
            echo '<img src="' . htmlspecialchars($row['imagen3']) . '" alt="Imagen 3" style="width:100px;">';
        }
        if (!empty($row['imagen4'])) {
            echo '<img src="' . htmlspecialchars($row['imagen4']) . '" alt="Imagen 4" style="width:100px;">';
        }
        echo '</td>';
        echo '<td>';
        echo '<a href="editar_producto.php?id=' . htmlspecialchars($row['id_producto']) . '">Editar</a>';
        echo '<form action="eliminar_producto.php" method="post" style="display: inline-block; margin-left: 10px;">';
        echo '<input type="hidden" name="id_producto" value="' . htmlspecialchars($row['id_producto']) . '">';
        echo '<input type="submit" value="Eliminar" onclick="return confirm(\'¿Estás seguro de eliminar este producto?\')">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo "No se encontraron productos.";
}

// Cerrar conexión
$conn->close();
?>

</body>
</html>
