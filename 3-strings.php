// calculate the length of a string
// strlen() is used to calculate the number of characters inside a string, it also includes blank spaces
$my_str = "Welcome to Tutorial Republic";
echo strlen($my_str); // 28

// counting number of words in a string
// str_word_count() counts number of words in a string
$my_str = "The quick brown fox jumps over the lazy dog.";
echo str_word_count($my_str); // 9

// replace text within strings
// str_replace() replaces all occurrences of the search text within the target string
$my_str = "If the facts do not fit the theory, change the facts.";
// If the truth do not fit the theory, change the truth.
echo str_replace("facts", "truth", $my_str);

// optional fourth argument can be passed to know how many times string replacements were performed
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
// The text was replaced 2 times.
echo "The text was replaced $count times.";

// reverse a string
// strrev() reverses a string
$my_str = 'You can do anything, but not everything.';

// Display reversed string
echo strrev($my_str);
