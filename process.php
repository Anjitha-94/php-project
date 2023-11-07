<?php

session_start();


try {
    $pdo = new PDO('mysql:host=local host;dbname=myproject', 'root',);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Additional data validation and sanitization can be performed here.

    //Store the timestamp in the session

    $_SESSION['submission_time'] = time();
}

$sql = "INSERT INTO user_data (name, phone, email) VALUES (:name, :phone, :email)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);

try {
    $stmt->execute();
    echo "Data has been inserted into the database.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

session_start();

// Check if the session variable exists and the time passed is less than 10 minutes (600 seconds)
if (isset($_SESSION['submission_time']) && (time() - $_SESSION['submission_time'] < 600)) {
    die("Access denied. Please try again later.");
}

$pdo = null; // Close the connection
?>
