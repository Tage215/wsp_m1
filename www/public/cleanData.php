<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function cleanData($data)
    {
        if (isset($data)) {
            if (!mb_check_encoding($data)) {
                header('Location: index.php');
            }
            $data = strip_tags($data);
            $data = trim($data);
            $data = stripslashes($data);
        } else {
            header('Location: index.php');
        }
        return $data;
    }
    ?>
</body>

</html>