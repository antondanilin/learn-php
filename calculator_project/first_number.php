<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<table>
    <tr>
        <td>
            <form action="operator.php" method="get">
                <input type="hidden" name="hidden_first_num" value="<?php
                    echo $_GET["num"] ?? ''; ?>" >
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text" readonly="true" value="<?php
                                echo $_GET["num"] ?? ''; ?>">
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
</table>