<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
<div style="border-width:3px; border-style: solid; padding: 10px; width: 45%; background-color: gray">
<h1 style="color: white">KALKULATOR</h1>
    <hr>
<h2>Prosty</h2>
<form method="post">
    <label>Liczba 1: <input type="text" name="num1"><br></label>

    <label>Działanie:
    <select name="operation_simple">
        <option value="add">Dodawanie</option>
        <option value="subtract">Odejmowanie</option>
        <option value="multiply">Mnożenie</option>
        <option value="divide">Dzielenie</option>
    </select><br>
    </label>
    <label>Liczba 2: <input type="text" name="num2"><br></label>
    <input type="submit" name="submit_simple" value="Oblicz">
</form>
    <hr>
<h2>Zaawansowany</h2>
<form method="post">
    Wartość: <input type="text" name="value"><br>
    Działanie:
    <select name="operation_advanced">
        <option value="cos">Cosinus</option>
        <option value="sin">Sinus</option>
        <option value="tg">Tangens</option>
        <option value="bin2dec">Binarne na Dziesiętne</option>
        <option value="dec2bin">Dziesiętne na Binarne</option>
        <option value="dec2hex">Dziesiętne na Szesnastkowe</option>
        <option value="hex2dec">Szesnastkowe na Dziesiętne</option>
    </select><br>
    <input type="submit" name="submit_advanced" value="Oblicz">
</form>
</div>

<?php
// Kalkulator prosty
if (isset($_POST['submit_simple'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation_simple'];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p style='color:red;'>Podaj poprawne liczby!</p>";
    } else {
        switch ($op) {
            case "add":
                $result = $num1 + $num2;
                echo "Wynik dodawania: $result<br>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Wynik odejmowania: $result<br>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Wynik mnożenia: $result<br>";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<p style='color:red;'>Nie można dzielić przez zero!</p>";
                } else {
                    $result = $num1 / $num2;
                    echo "Wynik dzielenia: $result<br>";
                }
                break;
        }
    }
}

// Kalkulator zaawansowany
if (isset($_POST['submit_advanced'])) {
    $value = $_POST['value'];
    $op = $_POST['operation_advanced'];

    switch ($op) {
        case 'cos':
            return cos(deg2rad($value));
        case 'sin':
            return sin(deg2rad($value));
        case 'tg':
            return tan(deg2rad($value));
        case 'bin2Dec':
            return bindec($value);
        case 'dec2Bin':
            return decbin($value);
        case 'dec2Hex':
            return dechex($value);
        case 'hex2Dec':
            return hexdec($value);
        default:
            return "Wprowadzono złe dane.";
    }
}
?>
</body>
</html>
