<?php
/*
class Product{
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $sku;
    function showDetails(){
        echo "Name: $this->name, Price: $this->price";
    }
}

$product1 = new Product();
 $product1->name = "Mobile";
 $product1->price = "2000";
 $product1->category = "Technology";
 $product1->brand = "Walton";
 $product1->stock = "40";
 $product1->sku = "AA01";

 echo $product1->brand;

*/

 class Person {
    public $name;
    public $age;
    public $email;
    public $phone;
    public $address;
    public $occupation;

    public function showProfile(){
        echo "Name: $this->name\n Age: $this->age\n Email Adress: $this->email\n Phone: $this->phone\n Address: $this->address\n Occupation: $this->occupation";
    }
 }

 $person1 = new Person();
 $person1->name = "Naimul Islam Nabin";
 $person1->age = "30";
 $person1->email = "freelancernaimul@gmail.com";
 $person1->phone = "01625726917";
 $person1->address = "Dhaka, Bangladesh";
 $person1->occupation = "Developer";

 $person1->showProfile();
 