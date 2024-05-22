<?php
$servername = "www.db4free.net";
$username = "aguerrerosolaez";
$password = "12062005as";
$dbname = "mario_kart_8";


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
