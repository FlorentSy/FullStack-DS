<?php

include_once('config.php');

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];

	$sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id', $id);
	$prep->bindParam(':username', $username);
	$prep->bindParam(':name', $name);
	$prep->bindParam(':surname', $surname);
	$prep->bindParam(':email', $email);

	$prep->execute();

	header("Location:dashboard.php");
}


?>
