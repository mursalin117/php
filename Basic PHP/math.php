<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 10</title>
  </head>
  <body>

    <?php
    // pi() function for showing the value of pi
    echo "The value of pi is: ";
    echo (pi()); // returns 3.1415926535898
    echo "<br>";

    // min() function
    echo "The min value is " . min(0, 150, 30, 20, -8, -200) . "<br>"; // returns -200
    // max() function
    echo "The max value is " . max(0, 150, 30, 20, -8, -200) . "<br>"; // returns 150

    // abs() function
    echo "The absolute value is: " . abs(-6.7) . "<br>";

    // sqrt() function
    echo "The squar root of 64 is: " . sqrt(64) . "<br>";

    // round() function
    echo "The round of 0.60 is: " . round(0.60) . "<br>"; // retuns 1
    echo "The round of 0.49 is: " . round(0.49) . "<br>"; // returns 0

    // rand() - for random number
    echo "A random number is: " . rand() . "<br>";
    echo "A random number between 10 and 100 is: " . rand(10, 100) . "<br>"; // random number with upper and lower limit
    ?>

  </body>
</html>
