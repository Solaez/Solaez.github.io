<?php
$servername = "localhost";
$username = "produc_chat";
$password = "produc_chat";
$dbname = "produc_chat";

// Crear conexi車n
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexi車n
if ($conn->connect_error) {
    die("Conexi車n fallida: " . $conn->connect_error);
}

// Comprobar si se envi車 una solicitud POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar nuevo mensaje
    if(isset($_POST['user']) && isset($_POST['message'])) {
        $user = $_POST['user'];
        $message = $_POST['message'];
        $stmt = $conn->prepare("INSERT INTO messages (user, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $message);
        $stmt->execute();
        $stmt->close();
        echo json_encode(array("success" => true, "message" => "Mensaje guardado correctamente"));
    } else {
        echo json_encode(array("success" => false, "message" => "Faltan datos de usuario o mensaje"));
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Obtener todos los mensajes
    $result = $conn->query("SELECT user, message, timestamp FROM messages ORDER BY timestamp ASC");
    $messages = [];
    while($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
    echo json_encode($messages);
} else {
    echo json_encode(array("success" => false, "message" => "M谷todo de solicitud no v芍lido"));
}

$conn->close();
?>
