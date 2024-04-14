<?php

/* for ($i=0; $i < 10 ; $i++) { 
     echo("\n" . $i);
 } */
// ----------------------------------------------------------------

/*
$number = 15;
$count = 0;

while ($count < $number) {
    echo "\n" .$count;
    $count++;
}
*/
// ----------------------------------------------------------------

/*
$number = 15;
$count = 0;

do {
    echo "\n" .$count;
    $count++;    
} while ($count > $number); // The code block is going to be executed atleast once
*/
// ----------------------------------------------------------------

$names = ["Pesho", "Asen", "Stoqn", "Ivan"];

foreach ($names as $name) {
    echo "\n" . $name;
}

/*
$names = ["Pesho" => 20, "Asen" => 30, "Stoqn" => 40, "Ivan" => 22];

foreach ($names as $name => $age) {
    echo "\n" . $name . "-" . $age;
}
*/