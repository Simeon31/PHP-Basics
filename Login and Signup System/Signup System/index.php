<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup page</title>
</head>
<body>

    <h3 class=title>Signup</h3>

    <form class="form-css" action="includes/signup.inc.php" method="post">
        <?php
        show_inputs();
        ?>
        <br>
        <button class="btn-submit" type="submit">Signup</button>
    </form>

    <?php
    check_for_errors();
    ?>
</body>
</html>