<?php
// $firstName = "Naimul Islam";
// $lastName = "Nabin";
// echo $firstName . " " . $lastName;
// echo PHP_EOL;


// $product = "Laptop";
// $price = 50000;
// echo "Product Name: ".$product.". Price is: ".$price." BDT";



//Spaceship Opertaor

// $spaceShip1 = (3 <=> 5);
// echo $spaceShip1;
// echo PHP_EOL;

// $spaceShip2 = (5 <=> 5);
// echo $spaceShip2;
// echo PHP_EOL;

// $spaceShip3 = (6 <=> 5);
// echo $spaceShip3;
// echo PHP_EOL;

//Null Coalecing Operator
// $studentName = "Naimul Islam Nabin";
// $result = $studentName ?? "Undefined";
// echo $result;
// echo PHP_EOL;

// $customerName = null;
// $output = $customerName ?? "Undefined";
// echo $output;


//Ternary Operator
// $score1 = 50;
// $result1 = $score1 > 80 ? "You have got A+" : "You have not got A+";
// echo $result1;
// echo PHP_EOL;

// $score2 = 90;
// $result2 = $score2 > 80 ? "You have got A+" : "You have not got A+";
// echo $result2;

// $score = 60;

// if($score >= 80){
//     echo "A+";
// }elseif ($score >=70 && $score <= 80){
//     echo "A-";
// }elseif ($score >=60 && $score <70){
//     echo "B";
// }elseif ($score >=50 && $score <60){
//     echo "C";
// }elseif ($score >=40 && $score <50){
//     echo "D";
// }elseif($score >=33 && $score <40){
//     echo "E";
// }else{
//     echo "Failed!";
// }


$dayOfWeek = "Tuesday";

switch ($dayOfWeek) {
    case "Monday":
        echo "It's the start of the week!";
        break;
    case "Tuesday":
        echo "Tuesday, another day of work.";
        break;
    case "Wednesday":
        echo "Hump day!";
        break;
    case "Thursday":
        echo "Almost the weekend.";
        break;
    case "Friday":
        echo "TGIF!";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "Invalid day of the week.";
        break;
}
