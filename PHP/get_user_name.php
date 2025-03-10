<?php
session_start();

$response = array('success' => false, 'user_name' => '');

if (isset($_SESSION['user_name'])) {
    $response['success'] = true;
    $response['user_name'] = $_SESSION['user_name'];
}

echo json_encode($response);
?>
