<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';
        
        //* Error Handling
        $errors = [];

        if (is_input_empty($username, $password, $email)) {
            $errors["empty_input"] = "Fill in all the fields!";
        }
        if (check_email($email)) {
            $errors["invalid_email"] = "Invalid email!";
        }
        if (is_username_unique($pdo, $username)) {
            $errors["username_unique"] = "Username already exists!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_registered"] = "That email is already registered!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors"] = $errors;

            $signupData = [
                'username' => $username,
                'email' => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header('Location: ../index.php');
            die();
        }

        register_user($pdo, $username, $password, $email);

        header('Location: ../index.php?signup=successful signup');
        $pdo = null;
        $statement = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header('Location: ../index.php');
    die();
}