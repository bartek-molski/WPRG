<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuwanie niepożądanych znaków</title>
</head>
<body>

<form method="post">
    Wpisz ciąg liczb z niepożądanymi znakami: <br><br>
    <input type="text" name="inputText"><br><br>
    <input type="submit" value="Wyczyść ciąg">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputText"])) {
    $text = $_POST["inputText"];

    // Niepożądane znaki do usunięcia: \ / : * ? " < > | + -
    $znaki = array("\\", "/", ":", "*", "?", "\"", "<", ">", "|", "+", "-");

    // Usuwamy je za pomocą str_replace
    $czysty_text = str_replace($znaki, "", $text);

    echo "<p>Oryginalny ciąg: $text</p>";
    echo "<p>Oczyszczony ciąg: $czysty_text</p>";
}
?>

</body>
</html>
