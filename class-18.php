<?php
/*
abstract class PaymentGateway{
    abstract public function pay($amount);
}

class PayPal extends PaymentGateway{
     public function pay($amount){
        echo "Paid {$amount} via PayPal\n";
     }
}
class Stripe extends PaymentGateway{
     public function pay($amount){
        echo "Paid {$amount} via Stripe\n";
     }
}
$paypal = new PayPal();
$paypal->pay("1000");
$stripe = new Stripe();
$stripe->pay("3000");
*/

//Interface
interface PaymentGateway{
    public function pay($amount);
}

class PayPal implements PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via Paypal\n";
    }
}
class Stripe implements PaymentGateway{
    public function pay($amount){
        echo "Paid $$amount via Stripe\n";
    }
}
$paypal = new PayPal();
$paypal->pay("1500");
$stripe = new Stripe();
$stripe->pay("2500");


//Pillar of OOP

/*
1.Inheritance
2.Abstraction
3.Inerface
4.Encapsulation
5.Polymorphism
*/