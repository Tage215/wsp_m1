<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
      for($i = 1; $i <= 5; $i += 0.1){
         print("$i ");
      }
      
      print("\n");

      $index = 1;
      while($index <= 5){
         print("$index ");
         $index += 0.1;
      }
   ?>
</body>
</html>