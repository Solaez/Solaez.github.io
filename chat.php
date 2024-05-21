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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar nuevo mensaje
    $user = $_POST['user'];
    $message = $_POST['message'];
    $stmt = $conn->prepare("INSERT INTO messages (user, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $message);
    $stmt->execute();
    $stmt->close();
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener todos los mensajes
    $result = $conn->query("SELECT user, message, timestamp FROM messages ORDER BY timestamp ASC");
    $messages = [];
    while($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
    echo json_encode($messages);
}

$conn->close();
?>
