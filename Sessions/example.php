<?php
session_start();

unset($_SESSION["user"]);

// session_unset(); // deletes all the sessions

// session_destroy(); // destroys all of the data associated with the current session.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SESSION["user"];
    ?>
</body>
</html>