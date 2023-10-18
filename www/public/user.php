<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        print(cleanData($_POST["namn"]) . "<br>");
        print(cleanData($_POST["efternamn"]) . "<br>");
        print(cleanData($_POST["username"]) . "<br>");
        print(cleanData($_POST["password"]) . "<br>");
    ?>
</body>

</html>