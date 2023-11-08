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
   
    // Store the timestamp in the session
    $_SESSION['submission_time'] = time();

    $sql = "INSERT INTO user_data (username, phonenumber, email) VALUES ( $name, $phone, $email);";
    
    try {
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$name, $phone, $email]);

        echo "Data has been inserted into the database.";

        $pdo = null;
        $stmt = null;
        die();

    } catch (PDOException $e) {
       die( "Query failed" . $e->getMessage());
    }
}

 // Close the connection
?>
