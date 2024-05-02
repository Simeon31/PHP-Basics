<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_controller.inc.php';
        
        //* Error Handling
        $errors = [];

        if (is_input_empty($username, $password)) {
            $errors["empty_input"] = "Fill in all the fields!";
        }
       
        $result = get_user($pdo, $username);

        if (is_username_valid($result)) {
            $errors["incorrect_username"] = "Incorrect info!";
        }
        if (!is_username_valid($result) && is_password_valid($password, $result["user_password"])) {
            $errors["incorrect_username"] = "Incorrect info!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors"] = $errors;

            header('Location: ../index.php');
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . '_' . $result["user_id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["user_id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_regenerate_time"] = time();

        header('Location: ../index.php?login=success');
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