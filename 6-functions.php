<?php 
// CREATING FUNCTIONS 
function saySomething() {
    // do something
    return // code
}

// default values
function defaultValues($name="Jon Snow", $age="24") {
    return $name . " is " $age;
}

defaultValues(); // Jon Snow is 24

// PASSING ARGUMENTS TO A FUNCTION BY REFERENCE
// two ways to pass arguments in php
// by reference and by value
// the default is value, so if the value of the argument within the function is changed, it does not get affected outside of the function
// to modify arguments, they must be passed by reference
// this is done by prepending an ampersand & to the argument name in the function definition
function selfMultiply(&$number) {
    $number *= $number;
    
    return $number;
}

$mynum = 5;
echo $mynum; // 5

selfMultiply($mynum);
echo $mynum; // 25

// VARIABLE SCOPE
// Define the function
function test(){
    $greet = "Hello World!";
    echo $greet;
}
 
test(); // Outputs: Hello World!
 
echo $greet; // Generate undefined variable error

// GLOBAL KEYWORD
// when you need to import a variable from the main program into a function or vice versa
// you can use global before the variable name inside a function
$greet = "Hello World!";
 
// Defining function
function test(){
    global $greet;
    echo $greet;
}
 
test(); // Outpus: Hello World!
echo $greet; // Outpus: Hello World!
 
// Assign a new value to variable
$greet = "Goodbye";
 
test(); // Outputs: Goodbye
echo $greet; // Outputs: Goodbye

?>
