
<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    if (is_numeric($num1) && is_numeric($num2)) {
        if (!empty($_POST['operator'])) {
            $operator = $_POST['operator'];

            if ($operator === '+') {
                $result = $num1 + $num2;
            } elseif ($operator === '*') {
                $result = $num1 * $num2;
            } elseif ($operator === '/') {
                if ($num2 == 0) {
                    echo "Error: Division by zero";
                } else {
                    $result = $num1 / $num2;
                }
            } else {
                echo "Error: Unsupported operator";
            }

            if (isset($result)) {
                echo "The result is: $result";
            }
        } else {
            echo "Error: Operator not provided";
        }
    } else {
        echo "Error: Please enter valid numeric values for num1 and num2.";
    }
} else {
    echo "Error: Please enter two numbers.";
}
