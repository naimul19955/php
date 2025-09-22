<?php
trait message1{
    public function msg1(){
        echo "OOP is fun!";
    }
}
trait message2{
    public function msg2(){
        echo "OOP helps use to reduce code.";
    }
}

class Welcome1{
    use message1;
}
class Welcome2{
    use message1, message2;
}

$welcome1 = new Welcome1();
$welcome2 = new Welcome2();

echo $welcome1->msg1();
echo "\n";
echo $welcome2->msg1();
echo "\n";
echo $welcome2->msg2();