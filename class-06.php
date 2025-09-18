
<?php
//Associative Array(An array with named indexed)
$students = [
    "name" => "Abdur Rahaman",
    "age" => 30,
    "department" => "physics"
];

echo $students["name"]."\n";
echo $students["age"]."\n";
echo $students["department"]."\n";

//Convert  String into Array
$students = "Rahim, Karim, Raju";
$strToArray = explode(",", $students);
print_r($strToArray);


//Convert  Array into String
$students = ["Rahim, Karim, Raju"];
$arrayToString = implode( $students);
echo($arrayToString);

//Multidimensional Array
$students = [
    ["name" => "Abdur Rahaman", "age" => 25],
    ["name" => "Abdur Rahim", "age" => 26],
    ["name" => "Abdur Karim", "age" => 27],
];

echo $students[0]["name"]."\n";
echo $students[0]["age"]."\n";


//Serialize
$students = ["name" => "Naimul Islam", "age" => 30];
$serialized = serialize($students);
print_r($serialized);


//Array to JSON
$students = ["name" => "Naimul Islam", "age" => 30];
$arrayToJson = json_encode($students);
print_r($arrayToJson);














