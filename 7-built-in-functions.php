<?php 

// MATH functions
// square
echo pow(2, 7); // 28

// return a random number - can take two values
// start and end (inclusive)
echo rand(1, 200);

// mt_rand() produces a better random value and is 4x faster than rand() 
// start and end (inclusive)
echo mt_rand(1, 200);

// square root
echo sqrt(100);

// round up 
echo ceil(4.6) // 5

// round down
echo floor(4.6); // 4

// round
echo round(4.5); // 5

// STRING functions
$string = "Hello students do you like the class";
// length of string - includes spaces
echo strlen($string); // 35
// uppercase 
echo strtoupper($string);
// lowercase
echo strtolower($string);

// ARRAY functions
$list = [343, 34, 323, 23, 54, 232, 453];
echo max($list); // 454
// sort
sort($list);
// check if value exists in array - returns true or false
in_array(343, $list); // true

?>
