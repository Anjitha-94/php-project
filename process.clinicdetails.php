<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Query to fetch doctor details
$doctorQuery = "SELECT * FROM doctors";
$doctors = $pdo->query($doctorQuery)->fetchAll(PDO::FETCH_ASSOC);
// Query to fetch treatment details
$treatmentQuery = "SELECT * FROM treatments";
$treatments = $pdo->query($treatmentQuery)->fetchAll(PDO::FETCH_ASSOC);



