<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum($t1, $t2){
            return $t1 + $t2;
        }

        function multiply($t1, $t2){
            $prod = $t1 * $t2;
            return $prod;
        }

        function subtract($t1, $t2){
            $diff = $t1 - $t2;
            return $diff;
        }

        function divide($t1, $t2){
            $result = $t1 / $t2;
            return $result;
        }
    ?>
</body>
</html>