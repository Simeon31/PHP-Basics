<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password, string $email){
    if (empty($username) || empty($password) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

function check_email(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_unique(object $pdo,string $username)  {
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo,string $email){
    if (get_email($pdo, $email) ) {
        return true;
    } else {
        return false;
    }
}

function register_user(object $pdo, string $username, string $password, string $email)  {
    insert_user($pdo, $username, $password, $email);
}