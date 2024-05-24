<?php
$servername = "localhost";
$username = "id22204035_aguerrerosolaez";
$password = "12Juni02005.";
$dbname = "id22204035_chat_db";

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
