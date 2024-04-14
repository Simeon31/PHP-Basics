//* Form handling

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $age = htmlspecialchars($_POST["age"]);

   if (empty($firstname) || empty($lastname) || empty($age)) {   
    exit();
   }
}

