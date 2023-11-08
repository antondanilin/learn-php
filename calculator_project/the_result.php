<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<table>
    <tr>
        <td>
            <form action="the_result.php" method="get">

                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" readonly="readonly" value="<?php
                            $first_num = $_GET["hidden_first_num"];
                            $second_num = $_GET["hidden_second_num"];
                            $op = $_GET["hidden_op"];

                            $result = null; // Initialize the result variable

                            switch ($op) {
                                case "+":
                                    $result = $first_num + $second_num;
                                    break;
                                case "-":
                                    $result = $first_num - $second_num;
                                    break;
                                case "*":
                                    $result = $first_num * $second_num;
                                    break;
                                case "/":
                                    if ($second_num != "0") { // Check for division by zero
                                        $result = $first_num / $second_num;
                                    } else {
                                        $result = "Division by zero is not allowed.";
                                    }
                                    break;
                                default:
                                    $result = "Invalid operation";
                            }
                            echo $_GET["hidden_first_num"] . ($_GET["hidden_op"] ?? '') . $_GET["hidden_second_num"] . "=" . $result; ?>" >
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="num" value="1"></td>
                        <td><input type="submit" name="num" value="2"></td>
                        <td><input type="submit" name="num" value="3"></td>
                        <td><input type="submit" name="op" value="/"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="4"></td>
                        <td><input type="submit" name="num" value="5"></td>
                        <td><input type="submit" name="num" value="6"></td>
                        <td><input type="submit" name="op" value="*"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="7"></td>
                        <td><input type="submit" name="num" value="8"></td>
                        <td><input type="submit" name="num" value="9"></td>
                        <td><input type="submit" name="op" value="-"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="num" value="0"></td>
                        <td colspan="2"><input type="submit" name="op" value="=" style="width: 80%;"></td>
                        <td><input type="submit" name="op" value="+"></td>
                    </tr>
                </table>
            </form>
        </td>
        <td valign="top">
            <form action="calculator_template.php"><input type="submit" value="C"></form>
        </td>
    </tr>


