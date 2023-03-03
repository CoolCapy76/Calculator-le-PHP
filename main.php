<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['sub'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['sub'];

    // Validate input to prevent attacks
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Invalid input";
        exit;
    }

    switch ($op) {
        case "+":
            $ans = $num1 + $num2;
            echo $ans;
            break;

        case "-":
            $ans = $num1 - $num2;
            echo $ans;
            break;

        case "*":
            $ans = $num1 * $num2;
            echo $ans;
            break;

        case "/":
            if ($num2 == 0) {
                echo "Error: Division by zero";
                break;
            }
            $ans = $num1 / $num2;
            echo $ans;
            break;

        default:
            echo "Operator not set";
            break;
    }
} else {
    echo "Numbers or operator not set";
} ?>
