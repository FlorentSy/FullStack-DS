<?php 
    include_once('config.php');

    if(isset($_POST['submit'])){

        $name= $_POST['name'];
        $username= $_POST['username'];
        $email= $_POST['email'];
        $tempPassword = $_POST['password'];
        $password = password_hash($tempPassword, PASSWORD_DEFAULT);

        if(empty($name) || empty($username) || empty($email) || empty($password) ){
            echo "Mbushi te gjitha fushat!";
        }
        else{
            $sql="SELECT username from users WHERE username= :username";

            $tempSql = $conn->prepare($sql);
            $tempSql->bindParam(":username", $username);
            $tempSql->execute();
        }

        if($tempSql->rowCount()>0){
            echo "Username already exist";
            header("Location: signup.php");
        }
        else{
            $sql = "INSERT into users (name, username, email, password) 
            values 
            (:name, :username, :email, :password)";

            $insertSql = $conn->prepare($sql);

            $insertSql->bindparam(":name", $name);
            $insertSql->bindparam(":username", $username);
            $insertSql->bindparam(":email", $email);
            $insertSql->bindparam(":password", $password);

            $insertSql->execute();
            
            echo "User added successfully";
            header("Location: login.php");
        }

    }



?>