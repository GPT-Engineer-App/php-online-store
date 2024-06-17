<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $payment = htmlspecialchars($_POST['payment']);

    // Process the order (e.g., save to database, send email, etc.)
    // For now, we'll just display a confirmation message.
    echo "<h1>Order Confirmation</h1>";
    echo "<p>Thank you, $name. Your order has been placed.</p>";
    echo "<p>Shipping to: $address</p>";
    echo "<p>Payment method: $payment</p>";
}
?>