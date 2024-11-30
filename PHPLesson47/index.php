<?php
$host = "localhost";
$user = "root";
$pass = "";

try {
    // Create a new connection without specifying the database name
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL statement to create a new database named 'example2'
    $sql = "CREATE DATABASE example2";
    $conn->exec($sql);
    echo "Database 'example2' was created successfully.";

} catch (Exception $e) {
    echo "Failed to create the database: " . $e->getMessage();
}
?>
