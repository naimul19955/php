<?php

$name = "Naimul Islam Nabin";
echo "I'm $name";
echo PHP_EOL;

//Heredoc
$text = <<<EOT
My name is $name.
I am learining PHP
EOT;
echo $text;
echo PHP_EOL;

//Nowedoc
$text = <<<'EOT'
My name is $name.
I am learining PHP
EOT;
echo $text;


$length = strlen($text);

$word_count = str_word_count($text);

$reverse_string = strrev($text);

$strposition = strpos($text, "Awesome");

echo $length; //14
echo PHP_EOL;
echo $word_count; //3
echo PHP_EOL;
echo $reverse_string; //reverse character
echo PHP_EOL;
echo $strposition;  //7

$str_rep = str_replace("Awesome","Boring",$text);
echo $str_rep;
echo PHP_EOL;
echo strtoupper($text);
echo PHP_EOL;
echo strtolower($text);
echo PHP_EOL;
echo ucwords($text);

$text = "  PHP is Awesome  ";

$trimText = trim($text); //remove whitespace from bothside of a string

$substr = substr($text, 2,3); //2 is the number of index where string will be started to cutoff and 3 how many 
//characters will be cutoff form the 2 index position

echo $text;
echo PHP_EOL;

echo $trimText;
echo PHP_EOL;

echo $substr;
$text1 = "apple";
$text2 = "Apple";

$text3 = "banana";
$text4 = "banana";

$text5 = "Mango";
$text6 = "mango";

echo strcmp($text1,$text2)."\n";
echo strcmp($text3,$text4)."\n";
echo strcmp($text5,$text6)."\n";


//String Method
$password = "JANI NA";
$encode1 = md5($password);
$encode2 = sha1($password);

echo $encode1;
echo PHP_EOL;
echo $encode2;


