<?php
// $servername = "localhost";
// $username = "produc_chat";
// $password = "produc_chat";
// $dbname = "produc_chat";

require 'baseDatos.php';

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
