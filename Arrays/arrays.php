<?php

$fruits = ["apple", "banana", "cherry"];

$fruits[] = "Orange";

// echo $fruits[2];

//array_push($fruits, "grape");

//echo $fruits[4];

// array_splice($fruits, 1, 0, "cherry");

// print_r($fruits);

// Using associative array

/* $tasks = [
    "To do the homework" => "Asen",
    "Clean the room" => "Peter"
];
*/

//echo $tasks['Clean the room'];

//print_r($tasks);

// echo count($tasks);

// Multidimensional array

$vehicles = [
    array("Car", "Plane"),
    "Ship",
    "Train" 
];

echo $vehicles[0][1];