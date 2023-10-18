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

      print"<br>";
      
      $index = 1;
      while($index <= 5){
         print("$index ");
         $index += 0.1;
      }

      $page["head"] = "<h1>Välkommen</h1>";
      $page["main"] = "<p>Detta är innehållet på min sida</p>";
      $page["footer"] = "<hr><p>Min sidfoot</p>";
      foreach($page as $value) {
         print("$value <br>");
      }

      include('math.php'); 
      print(sum(10, 5));
   ?>
</body>
</html>