<?php 

// if
if(condition) {
    // code to be executed
}

// if else
if(condition) {
    // code
} else {
    // code executed if condition is false
}

// if elseif
if(condition) {
    // code if true
} elseif(condition2) {
    // code if condition1 is false
} else {
    // code if condition1 and condition2 are false
}

// ternary - takes three operands, the ? then a true or false 
echo($age < 18) ? "Child" : "Adult";

// php 7 - null coalescing operator
// introduces ?? which can be used as a shorthand when you need to use the ternary operator along with isset() fucntion

// To understand this in a better way consider the following line of code. It fetches the value of $_GET['name'], if it does not exist or NULL, it returns 'anonymous'.
$name = isset($_GET["name"]) ? $_GET["name"] : "anonymous";
// using null coalescing operator the same code can be written as
$name = $_GET["name"] ?? "anonymous";

// while loop
$i = 1;
while($i <= 3) {
    $i++;
    echo "The number is " . $i . "<br>" ;
}

// do while
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>" ;
}

// for
for($i = 1; $i <= 3; $i++) {
    echo "The number is " . $i . "<br>";
}

// foreach - 
/*  foreach($array as $value) {
    // code to be executed
} */

$colors = array("Red", "Green", "Blue");
// loop through colors array
foreach($colors as $color) {
    echo $color . "<br>";
}

// extension of foreach
/*
    foreach($array as $key => $value) {
        // code to be executed
    }

*/
$superhero = array("name" => "Peter Parker", "email" => "peterparker@gmail.com", "age" => 18);
// loop through superhero array
foreach($superhero as $key => $info) {
    echo $key . " : " . $info . "<br>";
}


// alternative to the if-elseif-else statements
// tests a variable against several values until it finds a match
switch($n){
    case label1:
        // Code to be executed if n=label1
        break;
    case label2:
        // Code to be executed if n=label2
        break;
    default:
        // Code to be executed if n is different from all labels
}
?>
