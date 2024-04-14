<?php
 
define("PI", 3.14);

// echo "Value of pi = " .PI;

function GetValue() {
    echo PI; // It is possible to call the constant above directly since it is within the global scope
}

GetValue();