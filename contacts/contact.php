<?php
// Подключение к базе данных
$host = 'localhost';
$dbname = 'reviews_db';
$user = 'root';
$password = '';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $message = $_POST['message'];

    // Валидация данных
    if (!empty($product_name) && !empty($user_email) && !empty($message)) {
        // Подготовка и выполнение запроса на вставку данных
        $stmt = $conn->prepare("INSERT INTO reviews (product_name, user_email, message) VALUES (:product_name, :user_email, :message)");
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            echo "Review submitted successfully!";
        } else {
            echo "Error submitting review.";
        }
    } else {
        echo "All fields are required!";
    }
}