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


?>