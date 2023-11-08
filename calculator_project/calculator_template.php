<?php
$num1 = $_GET['num1'] ?? '';
$num2 = $_GET['num2'] ?? '';
$operator = $_GET['operator'] ?? '';
$result = '';

$formula = ''; // необходимо заменить на получение актуальной формулы

?>
<table>
    <tr>
        <td>
            <form>
                <input type="hidden" name="num1" value="<?= htmlspecialchars($num1) ?>">
                <input type="hidden" name="num2" value="<?= htmlspecialchars($num2) ?>">
                <input type="hidden" name="operator" value="<?= htmlspecialchars($operator) ?>">
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" readonly="true" value="<?= htmlspecialchars($formula) ?>" >
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