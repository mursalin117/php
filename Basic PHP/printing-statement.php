<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 6</title>
  </head>
  <body>

    <?php
    // echo statement
    echo "<h2>PHP is fun!</h2>";
    echo "Hello world!<br>";
    echo "I am about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>"; // echo can use multiple parameter

    $txt1 = "Learn PHP";
    $txt2 = "W3schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
    ?>

    <hr>

    <?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    $txt1 = "Learn PHP";
    $txt2 = "W3schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
    ?>

  </body>
</html>
