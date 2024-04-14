<?php

$dsn = "mysql:host=localhost;database=promodatabase;";
$dbUserName = "root";
$dbPassword = "";

try {
    $pdo = new PDO($dsn, $dbUserName, $dbPassword);
    $pdo ->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}