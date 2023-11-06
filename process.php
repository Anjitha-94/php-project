<?php
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
}

$sql = "INSERT INTO user data (name, phone, email) VALUES (:name, :phone, :email)";
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

$pdo = null; // Close the connection
?>
