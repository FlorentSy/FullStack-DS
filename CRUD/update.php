<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Update user in the database
    $sql = "UPDATE users SET name=:name, username=:username, email=:email WHERE id=:id";
    $updateUser = $connect->prepare($sql);

    $updateUser->bindParam(':name', $name);
    $updateUser->bindParam(':username', $username);
    $updateUser->bindParam(':email', $email);
    $updateUser->bindParam(':id', $id);

    if ($updateUser->execute()) {
        header("Location: index.php");
    } else {
        echo "Error updating user.";
    }
}
?>
