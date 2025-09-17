<?php
//While Loop

$i = 1;
while($i <=5){
    echo $i."\n";
    $i++;
}

//For Loop
for($i=1; $i<=10; $i++){
    echo "5 x $i = ".(5* $i)."\n";
}


for($i = 10; $i>=1; $i--){
    echo $i;
    echo PHP_EOL;
}

//Do While Loop
$i = 1;
do{
    echo "Login attempts $i times\n";
    $i++;
}while($i <= 3);



















