

<?php 
	include_once('config.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: login.php');
	}

	$sql = "SELECT is_admin FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $is_admin = $user ? $user['is_admin'] : 0;
    $sql = "SELECT * FROM users";
    $selectUsers = $conn->prepare($sql);
    $selectUsers->execute();

  $users_data = $selectUsers->fetchAll();

?>
<div>
      <style>
		
        table
        {
          border: 1px solid black;
        }
      
        tr,td,th
        {
          border: 1px solid black;
          
        }
        table,tr,td
        {
          border-collapse: collapse;
        }
        td
        {
          padding: 10px;
        }
      
      </style>
        <?php 

        include_once('config.php');

        $getUsers = $conn->prepare("SELECT * FROM users");

        $getUsers->execute();

        $users = $getUsers->fetchAll();

        ?>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Email</th>
              <th>Update</th>
            </tr>
          </thead>
          <?php
            foreach ($users as $user ) {
          ?>
          <tbody>
            <tr> 
              <td> <?= $user['id'] ?> </td>
              <td> <?= $user['username'] ?> </td>
              <td> <?= $user['name']  ?> </td> 
              <td> <?= $user['surname']  ?> </td> 
              <td> <?= $user['email']  ?> </td>
              <td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='profile.php?id=$user[id]'> Update </a>"?></td>
            </tr>
          
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include("footer.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bookings for users</h1>
    
</body>
</html>