<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        .table {
            width: 100%;
            color: #212529;
        }
        td.botonTD {
            min-width: 100px;
            display: flex;
            gap: 10px;
            align-content: center;
            flex-direction: column;
            align-items: baseline;
        }
        .descripcionTD {
            max-width: 200px; /* Ajusta según el diseño */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        img {
            max-width: 100px; /* Ajusta el tamaño de la imagen según sea necesario */
            height: auto;
        }
        .precio{
            display: none;
        }
    </style>
</head>
<body>

<h2>Lista de Productos</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <label for="nombre">Buscar por Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <input type="submit" value="Buscar" class="btn btn-primary">
</form>

<?php
// Configuración de la conexión a la base de datos
require '../../php/baseDatos.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// ... (código anterior)

// Consulta SQL para obtener todos los productos o filtrar por nombre
$sql = "SELECT * FROM militar";
if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
    $nombre = $conn->real_escape_string($_GET['nombre']);
    $sql .= " WHERE nombres LIKE '%$nombre%'";
}

// Ejecutar la consulta
$result = $conn->query($sql);

// Crear un array para agrupar productos por categorías
$productosPorCategoria = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productosPorCategoria[$row['categorias']][] = $row;
    }
}

// Mostrar los productos agrupados por categorías
if (!empty($productosPorCategoria)) {
    foreach ($productosPorCategoria as $categoria => $productos) {
        echo '<h3>' . htmlspecialchars($categoria) . '</h3>';
        echo '<table class="table table-striped">';
        echo '<tr><th>Nombre</th><th>Descripción</th><th>Tipo</th><th>Lugar</th><th class="precio">Precio</th><th class="precio">Precio 2</th><th>Estado</th><th>Imágenes</th><th>Acciones</th></tr>';
        
        foreach ($productos as $producto) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($producto['nombre']) . '</td>';
            echo '<td class="descripcionTD">' . htmlspecialchars($producto['descripcion']) . '</td>';
            echo '<td>' . htmlspecialchars($producto['tipo']) . '</td>';
            echo '<td>' . htmlspecialchars($producto['lugar']) . '</td>';
            echo '<td class="precio">' . htmlspecialchars($producto['precio'] ?? '') . '</td>';
            echo '<td class="precio">' . htmlspecialchars($producto['precio2'] ?? '') . '</td>';
            echo '<td>' . htmlspecialchars($producto['estado']) . '</td>';
            echo '<td>';
            if (!empty($producto['imagen1'])) {
                echo '<img src="' . htmlspecialchars($producto['imagen1']) . '" alt="Imagen 1" loading="lazy">';
            }
            echo '</td>';
            echo '<td class="botonTD">';
            echo '<a class="btn btn-warning btn-sm" href="editarMilitar.php?id=' . htmlspecialchars($producto['id_producto']) . '">Editar</a>';
            echo '<form action="/1pagina militar/add/eliminar_producto.php" method="post" style="display: inline-block; margin-left: 10px;">';
            echo '<input class="btn btn-warning btn-sm" type="hidden" name="id_producto" value="' . htmlspecialchars($producto['id_producto']) . '">';
            echo '<input class="btn btn-danger btn-sm" type="submit" value="Eliminar" onclick="return confirm(\'¿Estás seguro de eliminar este producto?\')">';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }
} else {
    echo "No se encontraron productos.";
}

// Cerrar conexión
$conn->close();
?>


</body>
</html>
