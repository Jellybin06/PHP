<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>function</h1>
    <?php
      $str = "Lorem ipsum dolor sit amet
      <br>
      consectetur adipisicing elit";
      echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
      echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
      echo nl2br($str);
      //"Lorem ipsum dolor sit amet
      //consectetur adipisicing elit";
    ?>
  </body>
</html>
