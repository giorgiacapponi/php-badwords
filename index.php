<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="print.php" method="GET">
        <label for="userText">inserisci il testo</label>
        <input type="text" id="userText" name="userText">
        <label for="badWord">parola che vuoi censurare</label>
        <input type="text" id="badWord" name="badWord">
        <button type="submit">invia</button>


    </form>
</body>
</html>