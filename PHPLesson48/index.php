<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test3';

try{
    //connect to database
    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    //$sql = "CREATE DATABASE test3";
    //set values to be inserted
    $username = "Florent";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username ,password) values ('$username', '$password')";

    //creating table
    //$sql = "CREATE TABLE users(id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //username VARCHAR(255) NOT NULL,
    //password VARCHAR(255) NOT NULL )";

    //adding columns
   // $sql = "ALTER TABLE users ADD password varchar(255)";

    //deleting columns
    //$sql ="ALTER TABLE users DROP column email";

    //delete table
    //$sql= "DROP table users";

    $conn->exec($sql);

    // $last_id = $conn->lastInsertId();
    echo "Values are added ";
}catch(Exception $e){
    echo $e->getMessage();
}

?>