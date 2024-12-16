<?php

	include_once('config.php');

	if(isset($_POST['submit']))
	{

        $username = $_POST['username'];
	    $name = $_POST['name'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$email = $_POST['email'];


			$sql = "INSERT INTO users(username,name,email,password,confirm_password) VALUES (:username, :name, :email, :password, :confirm_password)";

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':email', $email);
			$insertSql->bindParam(':password', $password);
			$insertSql->bindParam(':confirm_password', $password);

			$insertSql->execute();

			echo "The user has been added successfully";

			echo "<br>";

			echo "<a href='dashboard.php'>Dashboard</a>";

	}


?>
<style>
	a{
		margin: 5px;
		padding: 5px;
		text-decoration: none;
		background-color: blue;
		color: white;
	}
</style>