<?php

declare(strict_types=1);

function get_user(object $pdo, string $username)  {
    $selectQuery = "SELECT * FROM users WHERE username = :username;";
    $statement = $pdo->prepare($selectQuery);
    $statement->bindParam(':username', $username);
    $statement->execute();
    
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

