<?php

$sensitiveData = "UserName";

$salt = bin2hex(random_bytes(128));
$pepper = "Secret string ";

// echo $sensitiveData;

$dataToHash = $sensitiveData . $salt . $pepper;

$hash = hash('sha256', $dataToHash);

// echo "\n" . $hash;

// ----------------------------------------------------------------

$sensitiveData = "Name";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "Secret string ";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash('sha256', $dataToHash);

if ($storedHash === $verificationHash) {
   // echo "Verified Hash";
}
else {
   // echo "Hash was not verified";
}

// ----------------------------------------------------------------

//* Hashing a password

$signupPassword = "User123";

$options = [ "cost" => 10]; 

$hashedpwd = password_hash($signupPassword, PASSWORD_BCRYPT, $options);

$loginPassword = "User123";

$verifiedPassword = password_verify($loginPassword, $hashedpwd);

if ($verifiedPassword) {
    echo "Verified Password.";
}
else {
    echo "Password was not verified!";
}