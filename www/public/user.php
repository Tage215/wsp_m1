<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    function clean($data)
    {
        if (isset($data)) {
            if(!mb_check_encoding($data)){
                header('Location: index.php');
            }
            $data = strip_tags($data);
            $data = trim($data);
            $data = stripslashes($data);
        }
        else{
            header('Location: index.php');
        }
        return  $data;
    }

    print(clean($_POST["namn"]));
    print(clean($_POST["efternamn"]));
    print(clean($_POST["username"]));
    print(clean($_POST["password"]));
    ?>
</body>

</html>