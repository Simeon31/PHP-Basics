<?php

declare(strict_types=1);

function check_for_errors()  {
    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION["errors"];

        echo '<br>';

        foreach ($errors as $error ) {
            echo '<p class="error-handler">' . $error . '</p>';
        }
        unset($_SESSION["errors"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<br>';
        echo '<p class="success">Login was successful!</p>'; 
    }
}

function print_user() {
    if (isset($_SESSION["user_id"])) {
        echo "You are logged in as " . $_SESSION["user_username"];
    }
}