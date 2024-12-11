<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="add.php" method="POST">
		
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="name" placeholder="Emri"><br>
		<input type="text" name="surname" placeholder="Mbiemri"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<button type="submit" name="submit">Add</button>

	</form>

</body>
</html>