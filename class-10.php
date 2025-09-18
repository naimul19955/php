<?php

$file = fopen("new.txt","w");
fwrite($file,"Naimul Islam Nabin");

$file = fopen("new.txt","r");
echo fread($file,filesize("new.txt"));
fclose($file);



//Creating a Folder
mkdir("myFolder");

//rename text file
rename("another.txt","new.txt");


//Another method for creating file and writing in it
file_put_contents("test.txt","Naimul Islam Nabin - ");

//Adding new text with the existing text
file_put_contents("test.txt","Learning PHP with Projukti Plus!",FILE_APPEND);

//to see the written content
echo file_get_contents("test.txt");

//creating file and content with variable
$fileName = "new.txt";
$content1 = "First Content - ";
$content2 = "Second Content";

file_put_contents($fileName,$content1);
file_put_contents($fileName,$content2,FILE_APPEND);

echo file_get_contents($fileName);


//checking before creating a folder if it already exists

$folder = "myFolder";
if(!is_dir($folder)){
    mkdir($folder);
}else{
    echo "$folder folder already exists";
}



//To check the current directory
__DIR__;

$file = "E:/WORDPRESS SOLUTION/PHP HW/php/new.txt";
if(file_exists($file)){
    echo file_get_contents($file);
}else{
    echo "File does not exist";
}
