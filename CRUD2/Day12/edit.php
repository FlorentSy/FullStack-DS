<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

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
	
	<form action="update.php" method="POST">
	<input type="number" name="id"  value="<?php echo $data['id']?>" readonly><br>
    <input type="text" name="username" value="<?php echo $data['username']?>"><br>
    <input type="text" name="name" value="<?php echo $data['name']?>"><br>
    <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
    <input type="email" name="email" value="<?php echo $data['email']?>"><br>

		<br><br>
		<button type="submit" name="update">UPDATE</button>
       
	</form>
    <a href="dashboard.php">Dashboard</a>
	</body>
</html>

