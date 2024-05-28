<?php
session_start();

$servername = "localhost";
$username = "id22234751_producciones";
$password = "12Juni02005.";
$dbname = "id22234751_chat";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$response = array("success" => false, "message" => "Email o contraseña incorrectos");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Consulta para verificar las credenciales
    $sql = "SELECT * FROM users WHERE email = ? AND password = SHA2(?, 256)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        $response["success"] = true;
        $response["message"] = "Login exitoso";
    }
}

$stmt->close();
$conn->close();

echo json_encode($response);
?>
