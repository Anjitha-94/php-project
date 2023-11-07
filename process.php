<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Additional data validation and sanitization can be performed here.

    // Store the timestamp in the session
    $_SESSION['submission_time'] = time();

    $sql = "INSERT INTO user_data (name, phone, email) VALUES (:name, :phone, :email)";
    
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "Data has been inserted into the database.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$pdo = null; // Close the connection
?>
