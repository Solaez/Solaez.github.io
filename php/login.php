<?php
session_start();

// $servername = "localhost";
// $username = "produc_chat";
// $password = "produc_chat";
// $dbname = "produc_chat";

require 'baseDatos.php';

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
    $stmt->bind_result($id, $username, $email);

    
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