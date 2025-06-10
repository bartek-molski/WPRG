<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>formularz</title>
    <style>
        body {
            padding: 20px;
        }
        table {
            border-collapse: collapse;
        }
        label {
            display: block;
        }
    </style>
</head>
<body>
<form method="post">
    <label>Imię:
        <input type="text" name="imie" required>

    </label>
    <label>Nazwisko:
        <input type="text" name="nazwisko" required>
    </label>
    <label>Nazwisko:
        <input type="text" name="nazwisko" required>
    </label>
    <label>E-mail:
        <input type="email" name="email" required>
    </label>
    <label>Hasło:
        <input type="password" name="haslo" required>
    </label>
    <input type="submit" value="Wyślij">
</form>
<footer>Footer - Copyright 2020</footer>
</body>
</html>