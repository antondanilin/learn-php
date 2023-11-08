<?php
$operator = $_GET['op'] . $_GET['operator'] ?? '';
$digit = $_GET['digit'] ?? '';
$equalitySign = $_GET['calc'] ?? '';
$calculation = null;

$num1 = $_GET['num1'] ?? '';
$num2 = $_GET['num2'] ?? '';

$num1.= ($operator === '') ? $digit : '';
$num2.= ($operator != '') ? $digit : '';

if ($equalitySign === '='){
    switch ($operator) {
        case '+':
            $calculation = (int)$num1 + (int)$num2;
            break;
        case '-':
            $calculation = (int)$num1 - (int)$num2;
            break;
        case '*':
            $calculation = (int)$num1 * (int)$num2;
            break;
        case '/':
            if ((int)$num2 !== 0) {
                $calculation = (int)$num1 / (int)$num2;
            } else {
                $calculation = "Division by zero is not allowed";
            }
            break;
        default:
            $calculation = "Invalid operator";
            break;
    }
}

$output = $num1 . $operator . $num2 . $equalitySign . $calculation; // необходимо заменить на получение актуальной формулы

?>
<table>
    <tr>
        <td>
            <form action="calculator_template.php" method="get">
                <input type="hidden" name="num1" value="<?= htmlspecialchars($num1) ?>">
                <input type="hidden" name="num2" value="<?= htmlspecialchars($num2) ?>">
                <input type="hidden" name="operator" value="<?= htmlspecialchars($operator) ?>">
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" value="<?= htmlspecialchars($output) ?>" readonly="true">
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="digit" value="1"></td>
                        <td><input type="submit" name="digit" value="2"></td>
                        <td><input type="submit" name="digit" value="3"></td>
                        <td><input type="submit" name="op" value="/"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="digit" value="4"></td>
                        <td><input type="submit" name="digit" value="5"></td>
                        <td><input type="submit" name="digit" value="6"></td>
                        <td><input type="submit" name="op" value="*"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="digit" value="7"></td>
                        <td><input type="submit" name="digit" value="8"></td>
                        <td><input type="submit" name="digit" value="9"></td>
                        <td><input type="submit" name="op" value="-"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="digit" value="0"></td>
                        <td colspan="2"><input type="submit" name="calc" value="=" style="width: 80%;"></td>
                        <td><input type="submit" name="op" value="+"></td>
                    </tr>
                </table>
            </form>
        </td>
        <td valign="top">
            <form><input type="submit" value="C"></form>
        </td>
    </tr>
</table>