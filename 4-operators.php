<?php 
// comparison operators
// equal ==
// identical ===
// compare > < >= <> (not equal)
// not equal !=
// not identical !==

// logical operators
// and 
// or
// xor true if x or y is true but not both
// && and
// || 
// ! not 

if(4 === "4") {
    echo "true";
} else {
    echo "false";
}

// php 7 spaceship operator <=> 
// can be used for comparing two expressions
// also known as combined comparison operator
// returns 0 if both operands are equal
// returns 1 if the left is larger
// returns -1 if the right is larger 
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1 // 1

// comparing floats
echo 1.5 <=> 1.5 // 0
echo 1.5 <=> 2.5 // -1
echo 2.5 <=> 1.5 // 1

// comparing strings
echo "x" <=> "x" // 0
echo "x" <=> "y" // -1
echo "y" <=> "x" // 1
?>
