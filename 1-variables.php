
<?php 
// variables must start with $
// cannot start with special characters or numbers
// all variables are case sensitive
$name = "Bob Ross";
$age = "unknown";
$color = "green";
$user = "peter parker";

// functions, classes and keywords are NOT case sensitive
// these call the same function
echo gettype($color);
ECHO GETTYPE($color);

// constants are defined using the define() function
// which takes two inputs - the name of the constant and the value
define("King_Of_The North", "Jon Snow");
echo "I  " . King_Of_The_North . " banish you from this realm!";
// I Jon Snow banish you from this realm !

// When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.
// Works as of PHP 5.6.0

const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;


const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1]; // outputs "cat"

// Works as of PHP 7
define('ANIMALS', array(

'dog',

'cat',

'bird'

));

echo ANIMALS[1]; // outputs "cat"
?>

