<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$query = "SELECT * FROM clinic_list";
$stmt = $pdo->query($query);
$clinics = $stmt->fetchAll(PDO::FETCH_ASSOC);
