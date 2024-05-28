<?php
$servername = "localhost";
$username = "id22234751_producciones";
$password = "12Juni02005.";
$dbname = "id22234751_chat";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Eliminar mensajes con más de 2 minutos de antigüedad
$sql = "DELETE FROM messages WHERE timestamp < (NOW() - INTERVAL 2 MINUTE)";
if ($conn->query($sql) === TRUE) {
    echo "Mensajes antiguos eliminados correctamente.";
} else {
    echo "Error al eliminar mensajes: " . $conn->error;
}

$conn->close();
?>
