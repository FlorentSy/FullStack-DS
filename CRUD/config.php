<?php 
$server = 'localhost';
$dbname = 'userdashboard';
$username = 'root';
$password = '';

try{
    $connect = new PDO ("mysql:host=$server; dbname=$dbname", $username ,$password);
}catch(Exception $e){
    echo "Something is wrong";
}

?>