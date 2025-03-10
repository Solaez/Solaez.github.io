<?php
include 'config.php';

$response = array('success' => false, 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $response['success'] = true;
    } else {
        $response['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

echo json_encode($response);
?>
