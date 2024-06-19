<?php
$servername = "localhost"; // Nombre del servidor MySQL
$username = "root"; // Usuario de MySQL
$password = "root"; // Contraseña de MySQL
$dbname = "productos"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
<?php
// Query para obtener productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Iterar sobre cada fila de resultados
  while($row = $result->fetch_assoc()) {
    // Aquí se genera el HTML para cada producto
    echo '<div id="' . $row['id_producto'] . '" class="product" data-category="' . $row['categorias'] . '">';
    echo '<img src="' . $row['imagen'] . '" alt="' . $row['nombre'] . '" >';
    echo '<h3 class="titleproductos">' . $row['nombre'] . '</h3>';
    echo '<a href="#' . $row['id_producto'] . '"><button>Seleccionar</button></a>';
    echo '<div id="product-details" style="display: none;">';
    echo '<img class="imag1" src="' . $row['imagen1'] . '" alt="imagen1">';
    echo '<img class="imag2" src="' . $row['imagen2'] . '" alt="imagen2">';
    echo '<img class="imag3" src="' . $row['imagen3'] . '" alt="imagen3">';
    echo '</div>';
    echo '<div id="product-details" style="display: none;">';
    echo '<p class="descripcion">' . $row['descripcion'] . '</p>';
    echo '<p class="tipo">' . $row['tipo'] . '</p>';
    echo '<p class="lugar">' . $row['lugar'] . '</p>';
    echo '<p class="precio">' . $row['precio'] . '</p>';
    echo '<p class="precio2">' . $row['precio2'] . '</p>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo "0 resultados";
}
$conn->close();
?>
