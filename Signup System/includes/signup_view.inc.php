<?php

declare(strict_types=1);

function show_inputs()  {

        if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors"]["username_unique"])) {
            echo '<br>';
            echo '<input class="username" type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">';
        } else {
            echo '<br>';
            echo '<input class="username" type="text" name="username" placeholder="Username">';
        }
        
        echo '<br>';
        echo '<br>';
        echo '<input class="pwd" type="password" name="pwd" placeholder="Password">';

        if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors"]["email_registered"]) && !isset($_SESSION["errors"]["invalid_email"])) {
            echo '<br>';
            echo '<br>';
            echo '<input class="email" type="text" name="email" placeholder="Email" value="' . $_SESSION["signup_data"]["email"] . '">';
        } else {
            echo '<br>';
            echo '<br>';
            echo '<input class="email" type="text" name="email" placeholder="Email">';
        }    
}
function check_for_errors()  {
    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION["errors"];

        echo '<br>';

        foreach ($errors as $error ) {
            echo '<p class="error-handler">' . $error . '</p>';
        }
        unset($_SESSION["errors"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "successful signup") {
        echo '<br>';
        echo '<p class="success">Signup was successful!</p>'; 
    }
}