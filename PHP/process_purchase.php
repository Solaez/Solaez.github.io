<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Unknown';
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $payment_method = $_POST['payment'];
    $card_number = $_POST['tarjeta'];
    $card_holder = $_POST['portatarjetas'];
    $expire = $_POST['expire'];
    $cvc = $_POST['cvc'];

    // Asegúrate de que tienes una tabla "purchases" en tu base de datos
    $sql = "INSERT INTO purchases (user_name, product_name, product_price, payment_method, card_number, card_holder, expire, cvc)
            VALUES ('$user_name', '$product_name', '$product_price', '$payment_method', '$card_number', '$card_holder', '$expire', '$cvc')";

    if ($conn->query($sql) === TRUE) {
        // Redirige a una página de confirmación de compra
        header('Location: /game-x/sitios/games.html');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
