<?php
include_once("config.php");

$id = $_GET['id'];

// Fetch user data based on the ID
$sql = "SELECT * FROM users WHERE id=:id";
$getUser = $connect->prepare($sql);
$getUser->bindParam(':id', $id);
$getUser->execute();

$user = $getUser->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "User not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <input type="text" name="name" value="<?= $user['name'] ?>" placeholder="Name"> <br><br>
        <input type="text" name="username" value="<?= $user['username'] ?>" placeholder="Username"> <br><br>
        <input type="email" name="email" value="<?= $user['email'] ?>" placeholder="Email"> <br><br>

        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>
