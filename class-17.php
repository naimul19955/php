<?php
/*
class Fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    public function Intro(){
        echo "The fruit is {$this->name} and it's color is {$this->color}.";
    }
   
}

class Strawberry extends Fruit{
    public function message(){
        echo "This is a message from Strawberry class.";
    }
}
$strawberry = new Strawberry("strawberry","red");
$strawberry->message();
echo PHP_EOL;
$strawberry-> Intro();



class Fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    public function Intro(){
        echo "The fruit is {$this->name} and it's color is {$this->color}.";
    }
   
}

class Strawberry extends Fruit{
    public $weight;
    public function __construct($name,$color,$weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function Intro(){
        echo "The fruit is {$this->name} and it's color is {$this->color} and Weight is {$this->weight}.";
    }
   
}
$strawberry = new Strawberry("strawberry","red","60"); //The construct function and Intro method of child Strawberry 
// class will override the construct function and Intro method of Parent Fruit Class
$strawberry-> Intro();




class Person{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    
}
class Student extends Person{
    public $roll;
    public function studentDetails(){
        echo "Name: {$this->name}, Age: {$this->age}, Roll: {$this->roll}";
    }
}
$student1 = new Student("Naimul Islam Nabin","30");
$student1->roll = 2300;
$student1->studentDetails();
*/


class Person{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function showInfo(){
        echo "This is a message form Person Class.";
    }
}
class Student extends Person{
    public function studentInfo(){
        parent::showInfo();
        echo PHP_EOL;
        echo "Name: $this->name, Age: $this->age";
    }
}
$student1 = new Student("Naimul Islam Nabin","30");
$student1->studentInfo();







