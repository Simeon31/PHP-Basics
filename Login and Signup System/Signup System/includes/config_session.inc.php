<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1900,
    'domain' => 'localhost',
    'path' => '/',
    'httpOnly' => true,
    'secure' => true

]);

session_start();

function regenerate_session(){
    session_regenerate_id();
    $_SESSION["last_regenerate_time"] = time();
}

if (!isset($_SESSION["last_regenerate_time"])) {
    regenerate_session();
} else {
    $interval = 60 * 30;

    if (time() - $_SESSION['last_regenerate_time'] >= $interval) {
        regenerate_session();
    }
}