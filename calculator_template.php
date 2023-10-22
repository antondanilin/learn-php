<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form method="get"  id="calculator-form">
    <label for="num1">Number 1:</label>
    <input type="text" name="num1" id="num1" required><br>

    <label for="num2">Number 2:</label>
    <input type="text" name="num2" id="num2" required><br>

    <label for="operator">Operator:</label>
    <input type="text" name="operator" id="operator" required><br>



    <input type="submit" value="Calculate">
    <input type="reset" value="Reset">
</form>

<div id="result-container"></div>
