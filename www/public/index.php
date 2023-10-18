<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   for ($i = 1; $i <= 5; $i += 0.1) {
      print("$i ");
   }

   print "<br>";

   $index = 1;
   while ($index <= 5) {
      print("$index ");
      $index += 0.1;
   }

   $page["head"] = "<h1>Välkommen</h1>";
   $page["main"] = "<p>Detta är innehållet på min sida</p>";
   $page["footer"] = "<hr><p>Min sidfoot</p>";
   foreach ($page as $value) {
      print("$value <br>");
   }

   include('math.php');
   print(sum(10, 5) . "<br>");
   print(multiply(10, 5) . "<br>");
   print(subtract(10, 5) . "<br>");
   print(divide(10, 5) . "<br>");

   print(cleanData($_POST["namn"]) . "<br>");
   print(cleanData($_POST["efternamn"]) . "<br>");
   print(cleanData($_POST["username"]) . "<br>");
   print(cleanData($_POST["password"]) . "<br>");
   ?>

   <form action="user.php" method="post">
      <fieldset>
         <legend>Användare</legend>
         <label>Namn</label>
         <input type="text" name="namn">
         <br>
         <label>Efternamn</label>
         <input type="text" name="efternamn">
         <br>
         <label>Användarnamn</label>
         <input type="text" name="username">
         <br>
         <label>Lösenord</label>
         <input type="text" name="password">

         <input type="submit" value="Skicka">
      </fieldset>
   </form>

   <form method="post">
      <fieldset>
         <legend>Användare</legend>
         <label>Namn</label>
         <input type="text" name="namn">
         <br>
         <label>Efternamn</label>
         <input type="text" name="efternamn">
         <br>
         <label>Användarnamn</label>
         <input type="text" name="username">
         <br>
         <label>Lösenord</label>
         <input type="text" name="password">

         <input type="submit" value="Skicka">
      </fieldset>
   </form>

</body>

</html>