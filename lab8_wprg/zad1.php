<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formatowanie ciągu znaków</title>
</head>
<body>

<form method="post">
    Wpisz ciąg znaków: <input type="text" name="inputText">
    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputText"])) {
    $text = $_POST["inputText"];

    echo "<h3>Wyniki:</h3>";
    echo "Dużymi literami: " . strtoupper($text) . "<br>";
    echo "Małymi literami: " . strtolower($text) . "<br>";
    echo "Pierwsza duża litera: " . ucfirst(strtolower($text)) . "<br>";
    echo "Pierwsza duża dla każdego: " . ucwords(strtolower($text)) . "<br>";
}
?>

</body>
</html>