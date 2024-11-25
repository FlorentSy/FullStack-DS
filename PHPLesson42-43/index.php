<?php
echo "Lesson42" . "<br>";

//if statments -> if else switch elseif

$num = 20;
if($num <18){
    echo "$num is less than 0" . "<br>";
}else{
    echo "$num is bigger than 0". "<br>";
}


// $age = 13;
// if(($age >12) && ($age < 20)){

//     echo "You are a teenager";
    
// }



// $number = -45;
// if($number <0){
//     echo "The number is a negative number";

// }elseif($number == 0){
//     echo "The number is equal to 0";
// }else{
//     echo " The number is a positive number";
// }

/*

//Switch

$day = "Wednesday";

switch($day){
    case 'Monday':
    echo "Today is Monday";
    break;

    case 'Tueday':
    echo "Today is Tueday";
    break;

    case 'Wednesday':
    echo "Today is Wednesday";
    break;

    case 'Thursday':
    echo "Today is Thurday";
    break;

    case 'Friday':
    echo "Today is Friday";
    break;

    case 'Saturday':
    echo "Today is Saturday";
    break;

    case 'Sunday':
    echo "Today is Sunday";
    break;
}

*/
//While loops

/*
$x = 1;

while($x <=5){
    echo "The number is: $x <br>";
    $x++;
}
*/

/*

//Do while
$x = 1;
do{
    echo "The number is: $x <br>";
    $x++;
}while ($x <= 2);
*/



/*
//For loops

for ($x=0; $x<=10; $x++){
    echo "The number is: $x <br>";
}

*/

//for each

$cars = array("BMW" => "18", "AUDI" => "20", "Tesla" => "22", "MBenz" => "24");

foreach($cars as $x => $value){
    echo "$x => $value <br>";
}


?>

