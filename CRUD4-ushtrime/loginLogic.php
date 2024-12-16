<?php
// session_start(); // Start the session
include_once('config.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if(empty($username) || empty($password)) {
        echo "Mbushi te gjitha fushat!";
    } else {
        $sql = "SELECT * FROM users WHERE username = :username";
        $tempSql = $conn->prepare($sql);
        $tempSql->bindParam(":username", $username);
        $tempSql->execute();

        if($tempSql->rowCount() > 0) {
            $data = $tempSql->fetch();
            if(password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                header("Location: dashboard.php");
                exit(); // Always exit after a header redirection
            } else {
                echo "Password incorrect";
            }
        } else {
            echo "User not found";
        }
    }
}
?>
