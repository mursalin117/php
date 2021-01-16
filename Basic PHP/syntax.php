<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test2</title>
  </head>
  <body>

    <!-- PHP is not case sensitive -->
    <?php
    echo "Hello World!<br>";
    ECHO "Hello World!!<br>";
    eChO "Hello World!!!<br>";
    ?>

    <?php
    $color = "red";
    echo "The car is " . $color . ".<br>";
    echo "The house is " . $Color . ".<br>" ; // will show undefined variable
    echo "The boat is " . $COLOR . ".<br>"; // will show undefined variable
    ?>

  </body>
</html>
