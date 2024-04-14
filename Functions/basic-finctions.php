<?php

$name = "test";

// echo strlen($name); // echoing string length

$test01 = "new test";

// echo strpos($test01, "e"); // echoing the position of a character

$test02 = "Hello, world";

// echo str_replace("world", "Ivan", $test02); // replacing the original string with the new string

// echo strtolower/toupper($test02); // lowering the string

// echo substr($test02, 7, 11); // string subtraction

// print_r(explode(" ", $test01)); // returns an array of strings, split by a string 

$number = -145.39;

// echo abs($number); // gets the absolute value of a  number

// echo round($number); // num is rounded to precision significant digits after the decimal point. 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// echo count($array);

// echo is_array($array); // Finds whether the given variable is an array.

// array_push($array, 10); // Adds the given element to the end of the array

// print_r($array); 

// array_pop($array); // Removes the last element from the array

// print_r($array);

// print_r(array_reverse($array)); 

$testarray = [11, 12];

print_r(array_merge($array, $testarray));

echo date("Y-m-d H:i:s");

//echo time();

