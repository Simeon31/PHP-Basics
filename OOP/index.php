<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("Classes/Car.php");

        $car = new Car("Tesla", "White");

        // echo $car->brand;

        echo $car->getBrand();
        $car->setBrand("Audi");
        echo $car->showDetails();
    ?>
</body>
</html>