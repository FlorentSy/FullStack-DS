
<!-- php
 // Get and Post methods
// $username = $_GET['username'];
// $password = $_GET['password'];

// echo $username;
// echo "<br>";
// echo $password;

// php-->


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson49</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username:</label> <br>
        <input type="text" id="username" name="username" placeholder="Username"> <br>

        <label for="password">Password:</label> <br>
        <input type="password"  id="password" name="password" placeholder="Password">
        
        <input type="submit" value="Submit">
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetching data</title>
    <style>
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td,th{
            padding: 10px;
        }
        table{
            background-color: lightcyan;
        }
        a{
            border: 1px solid green;
            border-radius: 10px;
            padding: 5px;
            background-color: green;
            color: white;
            text-decoration: none;
        }

    </style>
</head>
<body>
<?php 

include_once("config.php");

$sql = "SELECT * from users";
$getUsers = $connect->prepare($sql);
$getUsers->execute();

$users = $getUsers -> fetchAll();

?>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
        </thead>
    

    <tbody>
        <?php 
            foreach ($users as $user){
        ?>

                <tr>
                    <td> <?= $user['id']?> </td>
                    <td> <?= $user['name']?> </td>
                    <td> <?= $user['username']?> </td>
                    <td> <?= $user['email']?> </td>
                    <td><?= "<a href='delete.php?id=$user[id]'> Delete </a>" ?> </td>
                </tr>
            
        <?php 
            }
        ?>
        
       
    </tbody>
    </table>

    <a href="index.html">Add User</a>
</body>
</html>