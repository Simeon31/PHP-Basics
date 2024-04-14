<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  
  try {
    require_once "dbh.inc.php";

    $query = "INSERT INTO promodatabase.users (user_name, user_password, user_email) VALUES
    (:user_name, :user_password, :user_email);";

    $statement = $pdo->prepare($query);

    $statement->bindParam(":user_name", $username);
    $statement->bindParam(":user_password", $password);
    $statement->bindParam(":user_email", $email);
    $statement->execute();
    
    
    // $query = "INSERT INTO users (user_name, user_password, user_email) VALUES
    // (?, ?, ?);";

    // $statement = $pdo->prepare($query);

    // $statement->execute([$username, $password, $email]);

    $pdo = null;
    $statement = null;

    header("Location: index.html");

    die();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
} else {
    header("Location: index.html");
}