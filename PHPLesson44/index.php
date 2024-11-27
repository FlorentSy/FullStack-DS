<?php
echo "Lesson44 <br>";
// // phpinfo();

// $x = "Hello <br>";
// print_r($x);

// $x = 5;
// echo gettype($x) . "<br>";

// $y = 10.07;
// echo gettype($y) . "<br>";

// $z = "Hello";
// echo gettype($z) . "<br>";


// function displayVersion(){
//     echo "this is your php version".phpversion() ."<br>";
//     echo "\n";
// }

// displayVersion(); 


function helloWorld(){
    echo " Hello World" . "<br>";

}

helloWorld();

function sum(){
    $value = 20+30;
    echo $value . "<br>";
}
sum();

function maximum($x, $y){
    if($x > $y){
    return $x . "<br>";
    }else {
        return $y . "<br>";
    }
}

echo maximum(20,30);




$x = 200224531;
function divisionModul($x){
    if($x % 2 ==0){
        echo " number $x   is fully divisible by 2" . "<br>";
    }else{
        echo " number $x   is not fully divisible by 2" . "<br>";
    }
}

divisionModul($x);
divisionModul(5);
divisionModul(70);
divisionModul(85);


// global and local variables

$x = 5;
function globalVariable(){
    $y=10;
  
    echo $y . "<br>";
}
echo $x . "<br>";
globalVariable();


$a = 20;
$b =30;

function ab(){
    global $a, $b;
    $b = $a + $b;
}

ab();
echo $b . "<br>";

function staticVariable(){
    static $count = 0;
    $count ++;
    echo " <br> The value of count is $count <br> ";
}

staticVariable();
staticVariable();
staticVariable();


//Arrays

// $sports = array('Football' , 'Basketball' , 'Handball') ;


// print_r( $sports);

$sports = ['Football' , 'Basketball' , 'Handball'];
$len = count($sports);

// array_pop($sports); and array_push
//// array_shift($sports);
////var_dump($sports);

// for($i=0; $i<$len; $i++){
//     echo "<br>" . $sports[$i];
// }


////// average of values in an array
$myValues = array(12,24,48,36);
$average = array_sum($myValues) / 4;

echo "Average of array values is :" . $average;
?>

