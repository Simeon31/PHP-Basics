<?php

// Local scope

function MyFunction()
{
    $name = "function";

    return $name;
}

// echo MyFunction();

// ----------------------------------------------------------------

// Global scope

$number = 10;

function PrintValue()
{
   // echo $number; // error message  
   
   // Way to access global variables
  // global $number;
  // echo $number; 

   // Another way to access global variables
   return $GLOBALS["number"];
}

// echo PrintValue();

// ----------------------------------------------------------------

// Another example of scope

function CountNumber()
{
   static $count = 0;
   
   $count = $count + 1;

   return $count;
}

echo CountNumber(); // Every time it's called, its value is being incremented
echo CountNumber();
echo CountNumber();