<?php
include 'config.php';
session_start();

$response = array('success' => false, 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_name'] = $row['name'];
            $response['success'] = true;
        } else {
            $response['message'] = "Contraseña incorrecta";
        }
    } else {
        $response['message'] = "No se encontró el usuario";
    }

    $conn->close();
}

echo json_encode($response);
?>
