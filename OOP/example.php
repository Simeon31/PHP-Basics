<?php

// Example with procedural php

$brand = "Mercedes";
$color = "black";

function showCarInfo($brand, $color) : string {
    return "Brand: {$brand}\n Color: {$color}";
}

echo(showCarInfo($brand, $color));