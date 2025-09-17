<?php

//Function
// function greet(){
//     echo "Hello, Future Developers!";
// }
// greet();
//Function with Parameter
// function addition($n1,$n2){
//     return $n1 + $n2;
// }
// echo addition(10,20);
// echo PHP_EOL;

//Function with Parameter having default value
// function multiplication($param1,$param2 = 6){

//     return $param1 * $param2;
// }
// echo multiplication(10);


//Local Variable and Global Variable

// $globalVariable = "This is a global variable\n";

// function myFunction()
// {
//     $localVariable = "This is a local variable\n";
//     global $globalVariable;
//     echo $localVariable;
//     echo $globalVariable;
// }
// myFunction();

//Anonymous Function
// $addition = function($n1,$n2){
//     echo $n1 + $n2;
//     echo PHP_EOL;
// };

// $addition(40,60);

//Arrow Fuction
// $addition = fn($n1, $n2) => $n1 + $n2;

// echo $addition(10,20);


//Callback Function
function process($callback){
    return $callback("Developers!");
}

$result = process(function($value){
    return "Hello, $value";
});

echo $result;













