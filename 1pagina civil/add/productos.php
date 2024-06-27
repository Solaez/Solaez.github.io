<!-- 
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
</style> -->

<style>
    .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    margin-left: -60px;
    scale: 0.9;
    }
    td.botonTD {
    min-width: 100px;
    display: flex;
    gap: 10px;
    align-content: center;
    flex-direction: column;
    align-items: baseline;
    }
    .table {
    width: 112%;
    margin-bottom: 1rem;
    color: #212529;
    margin-left: -60px;
}

</style>
<h2>Lista de Productos</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
    <label for="categoria">Buscar por Categoría:</label>
    <input type="text" id="categoria" name="categoria">
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

// Consulta SQL para obtener todos los productos o filtrar por categoría
$sql = "SELECT * FROM productos";
if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
    $categoria = $conn->real_escape_string($_GET['categoria']);
    $sql .= " WHERE categorias LIKE '%$categoria%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-striped">';
    echo '<tr><th>Nombre</th><th>Categorías</th><th>Descripción</th><th>Tipo</th><th>Lugar</th><th>Precio</th><th>Precio 2</th><th>estado</th><th>Imágenes</th><th>Acciones</th></tr>';
    
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['categorias']) . '</td>';
        echo '<td class="descripcionTD">' . htmlspecialchars($row['descripcion']) . '</td>';
        echo '<td>' . htmlspecialchars($row['tipo']) . '</td>';
        echo '<td>' . htmlspecialchars($row['lugar']) . '</td>';
        echo '<td>' . htmlspecialchars($row['precio']) . '</td>';
        echo '<td>' . htmlspecialchars($row['precio2']) . '</td>';
        echo '<td>' . htmlspecialchars($row['estado']) . '</td>';
        echo '<td>';
        if (!empty($row['imagen1'])) {
            echo '<img src="' . htmlspecialchars($row['imagen1']) . '" alt="Imagen 1" style="width:100px;">';
        }
        echo '</td>';
        echo '<td class=botonTD>';
        echo '<a class="btn btn-warning btn-sm" href="editar_producto.php?id=' . htmlspecialchars($row['id_producto']) . '">Editar</a>';
        echo '<form action="/1pagina civil/add/eliminar_producto.php" method="post" style="display: inline-block; margin-left: 10px;">';
        echo '<input class="btn btn-warning btn-sm" type="hidden" name="id_producto" value="' . htmlspecialchars($row['id_producto']) . '">';
        echo '<input class="btn btn-danger btn-sm" type="submit" value="Eliminar" onclick="return confirm(\'¿Estás seguro de eliminar este producto?\')">';
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
