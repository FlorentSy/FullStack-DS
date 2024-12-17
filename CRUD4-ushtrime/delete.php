<?php 

include_once("config.php");

$id =$_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";

$deleteUser = $conn->prepare($sql);

$deleteUser->bindParam(':id', $id);

$deleteUser->execute();

header('Location:dashboard.php');

	
?>