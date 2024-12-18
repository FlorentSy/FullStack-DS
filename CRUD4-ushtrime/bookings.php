<?php

// Include database connection
require 'config.php';
    $sql = "SELECT is_admin FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $is_admin = $user ? $user['is_admin'] : 0;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Fetch POST data
        $user_id =  $_SESSION['username'] ?? null; // Adjust this based on your session logic
        $movie_id = 1; // Replace with dynamic movie ID if needed
        $nr_tickets = $_POST['tickets'] ?? null;
        $date = $_POST['date'] ?? null;
        $time = $_POST['time'] ?? null;

        // Validate input
        if (empty($user_id) || empty($movie_id) || empty($nr_tickets) || empty($date) || empty($time)) {
            die("All fields are required!");
        }

        // Prepare SQL query
        $sql = "INSERT INTO bookings (user_id, movie_id, nr_tickets, date, time, is_approved)
                VALUES (:user_id, :movie_id, :nr_tickets, :date, :time, 0)";
        
        $sqlQuery = $conn->prepare($sql);

        // Bind parameters
        $sqlQuery->bindParam(':user_id', $user_id); 
        $sqlQuery->bindParam(':movie_id', $movie_id); 
        $sqlQuery->bindParam(':nr_tickets', $nr_tickets); 
        $sqlQuery->bindParam(':date', $date); 
        $sqlQuery->bindParam(':time', $time); 

        // Execute query
        $sqlQuery->execute();

        echo "Data saved successfully ...<br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $conn = null;
}
?>
