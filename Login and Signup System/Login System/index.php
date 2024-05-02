<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    print_user();
    ?>  
    
    <?php
     if (!isset($_SESSION["user_id"])){ ?>
     <h3 class="title">Login</h3>

    <form class="form-css" action="includes/login.inc.php" method="post">
        <input class="username" type="text" name="username" placeholder="Username">
        <br>
        <input class="pwd" type="password" name="pwd" placeholder="Password">
        <br>
        <button class="btn-submit" type="submit">Login</button>
    </form>
     <?php }
    ?>

    <?php
    check_for_errors();
    ?>

    <?php
    if (isset($_SESSION["user_id"])) { ?>
        <h3 class="title">Logout</h3>

    <form class="form-css" action="includes/logout.inc.php" method="post">
        <button class="btn-submit" type="submit">Logout</button>
    </form>
    <?php }
    ?>
    
</body>
</html>