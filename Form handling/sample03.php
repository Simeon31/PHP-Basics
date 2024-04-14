
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="formhandling.php" method="post">
            <label for="firstname">FirstName</label>
            <input id="firstname" type="text" name="firstname" placeholder="FirstName">
            <br>

            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="LastName">
            <br>

            <label for="age">Age</label>
            <input id="age" type="number" name="age" placeholder="Age">
            <br>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>