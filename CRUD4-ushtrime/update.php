<?php 

	include_once('config.php');

	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$tempPass = $_POST['password'];
		$password = password_hash($tempPass, PASSWORD_DEFAULT);

		if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password))
		{
			echo "You need to fill all the fields.";
			header( "refresh:2; url=profile.php" ); 
		}
		else
		{
			$sql= "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email, password=:password WHERE id=:id";

			$updateSql = $conn->prepare($sql);

			$updateSql->bindParam(':id', $id);
			$updateSql->bindParam(':name', $name);
			$updateSql->bindParam(':surname', $surname);
			$updateSql->bindParam(':username', $username);
			$updateSql->bindParam(':email', $email);
			$updateSql->bindParam(':password', $password);

			$updateSql->execute();

			header('Location: logout.php');
		}
	}
?>