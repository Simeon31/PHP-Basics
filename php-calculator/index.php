<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="number" name="num01" placeholder="First number">
        <select name="operation" id="operations">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="Second number">
        <button class="calculate-btn">Calculate</button>
        <br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            // Crabbing data from input fields
            $num_01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num_02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operation"]);

            // Handling errors
            $errors = false;

            if (empty($num_01) || empty($num_02) || empty($operator)){
                echo "<p class='calc-error'>Fill in all fields!</p>";
                $errors = true;
            }

           else if (!is_numeric($num_01) || !is_numeric($num_02)){
                echo "<p class='calc-error'>Only numbers are allowed!</p>";
                $errors = true;
            }

            // Calculator logic
            if($errors == false){
                $result = 0.0;
                switch ($operator) {
                    case 'add':
                        $result = $num_01 + $num_02;
                        break;
                    case 'subtract':
                        $result = $num_01 - $num_02;
                        break;
                    case 'multiply':
                        $result = $num_01 * $num_02;
                        break;
                        case 'divide':
                        $result = $num_01 / $num_02;
                            break;
                    default:
                        echo "<p class='result'>Invalid operator!</p>";
                        break;
                }

                echo "<p class='result'>Result = " . $result . "</p>";
            }

        }
    ?>
</body>
</html>