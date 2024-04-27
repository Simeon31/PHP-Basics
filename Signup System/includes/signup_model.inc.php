<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)  {
    $selectQuery = "SELECT username FROM users WHERE username = :username;";
    $statement = $pdo->prepare($selectQuery);
    $statement->bindParam(':username', $username);
    $statement->execute();
    
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function get_email(object $pdo, string $email)  {
    $selectQuery = "SELECT user_email FROM users WHERE user_email = :email;";
    $statement = $pdo->prepare($selectQuery);
    $statement->bindParam(':email', $email);
    $statement->execute();
    
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function insert_user(object $pdo, string $username, string $password, string $email) {
    $insertQuery = "INSERT INTO users (username, user_password, user_email) VALUES (:username, :pwd, :email);";

    $statement = $pdo->prepare($insertQuery);

    $options = [
        'cost' => 12
    ];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $statement->bindParam(':username', $username);
    $statement->bindParam(':pwd', $hashedPassword);
    $statement->bindParam(':email', $email);
    $statement->execute();
    
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}