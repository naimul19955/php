<?php
/*
//Encapsulation
class BankAccount{

    private $balance;

    public function __construct($intialBalance)
    {
       $this->balance = $intialBalance; 
    }

    public function getBalance(){
        return $this->balance;
    }
    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw($amount){
        if($amount > 0 && $amount <= $this->balance){
            $this->balance -= $amount;
        }
        else{
            echo "No Balance";
        }
    }
}
$account = new BankAccount(2000);
$account->deposit(400);
$account->withdraw(200);
echo $account->getBalance();
*/
//Polymorphism
class Shape{
    public function getArea(){
        return 0;
    }
}

//circle
class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}


//Rectangle
class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea()
    {
        return  $this->width * $this->height;
    }
}



//Triangle
class Triangle extends Shape{
    private $base;
    private $height;

    public function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}



$circle = new Circle(5);
$rectangle = new Rectangle(5,6);
$triangle = new Triangle(5,6);

$areas = [$circle,$rectangle,$triangle];
foreach($areas as $area){
    echo $area->getArea();
    echo PHP_EOL;
}















