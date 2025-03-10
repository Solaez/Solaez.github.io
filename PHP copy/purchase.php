<?php
include 'config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$response = array('success' => false, 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $data['username'];
    $gameName = $data['gameName'];
    $gamePrice = $data['gamePrice'];

    $sql = "INSERT INTO purchases (username, game_name, game_price) VALUES ('$username', '$gameName', '$gamePrice')";

    if ($conn->query($sql) === TRUE) {
        $response['success'] = true;
    } else {
        $response['message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

echo json_encode($response);
?>
