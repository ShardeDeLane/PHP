<?php 
// Integers
// integers can be specified in decimal base 10, hexadecimal base 16 with a prefixed 0x or octal base 8 prefixed with 0, 
// optionally preceded by a sign - or +
$a = 123; // decimal
$b = -123; // negative number
$c = 0x1A // hexadecimal
$d = 0123 // octal

// Strings - sequence of characters where every character is the same as a byte
// can be as large as up to 2GB (2147483647 bytes maximum)
$a = "Hello World";
$b = "Hello World!";
$c = 'Stay here, I\'ll be back';

// Floating Point numbers or Doubles
// Floating point numbers (also known as "floats", "doubles", or "real numbers") are decimal or fractional numbers
$a = 1.234;
$b = 10.2e3;

// Booleans - have two values, 1 true, 0 false
$show_error = true;

// Arrays - useful for combining a series of related items, an indexed collection of data values
$colors = array("red", "green", "blue");
$secondary_colors = ["purple", "yellow", "orange"];

// Objects - is a data type that not only stores data, but also information on how to process that data
// An object is an instance of a class which serves as a template for objects
// Objects are created based on this template using the new keyword
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}

// associative array has a key and a value
$friends = ["name" => "George", "age" => 22, "job" => "web designer"];
 
// Create object from class
$message = new greeting;

// NULL - used to represent empty values
// when a variable is created without a value it is automatically assigned NULL
$a = NULL;
$b = NULL;

// Resources - a special variable holding an reference to an external resource
// Open a file for reading
$handle = fopen("note.txt", "r");
// Connect to MySQL database server with default setting
$link = mysql_connect("localhost", "root", "");


?>
