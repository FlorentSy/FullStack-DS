<?php
echo "Lesson44 <br>";
// phpinfo();

$x = "Hello <br>";
print_r($x);

$x = 5;
echo gettype($x) . "<br>";

$y = 10.07;
echo gettype($y) . "<br>";

$z = "Hello";
echo gettype($z) . "<br>";


function displayVersion(){
    echo "this is your php version".phpversion() ."<br>";
    echo "\n";
}

displayVersion();

?>