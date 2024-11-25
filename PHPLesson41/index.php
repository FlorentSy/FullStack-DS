<?php 

$name = "Fl0rent";
echo "I'am $name <br>";

$x = 50;
$y = 30;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";

$a = "Florent";
$b = "Sy";

$c = $a.$b . "<br>"; // string concatenation .
echo "$c \n ";

$message = "Hello";
$message .= " World";

echo $message. "<br>";

$the_string = "Florent SY lejmani";
echo strlen($the_string ). "<br>";
echo str_word_count($the_string) . "<br>";
echo str_replace("lejmani", "LEJMANI", $the_string) . "<br>";
echo strrev($the_string);



?>