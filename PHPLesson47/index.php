<?php
 include("database.php");

 $username = "NewWayUsername";
 $password = "hashedPassword";
 //passowrd hashing
 $hash = password_hash($password, PASSWORD_DEFAULT);

 $sql = "INSERT INTO users (user, password)
         VALUES ('$username','$hash')";


try{
    mysqli_query($conn, $sql);
    echo "The user is now registered";

}catch(mysqli_sql_exception){
    echo "Could not register the user";
}
 


 mysqli_close($conn);

?>
