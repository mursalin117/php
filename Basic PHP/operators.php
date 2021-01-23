<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 12</title>
  </head>
  <body>

    <?php

    // arithmetic operators
    $x = 10;
    $y = 6;
    // addition
    echo "The result of multiplication is: " . ($x + $y) . "<br>"; //why??
    // subtraction
    echo "The result of subtraction is: " . ($x - $y) . "<br>"; // why??
    // multiplication
    echo "The result of multiplication is: " . $x * $y . "<br>";
    // division
    echo "The result of division is: " . $x / $y . "<br>";
    // modulus
    echo "The result of modulus operation is: " . $x % $y . "<br>";
    // exponentiation
    echo "The result of division is: " . $x ** $y . "<br>";
    echo "<hr>";

    // assignment operators
    // value assign
    $x = 10;
    echo "The value of x is: " . $x . "<br>";
    // addition
    $x += 100;
    echo "The value of x is: " . $x . "<br>";
    // subtraction
    $x -= 30;
    echo "The value of x is: " . $x . "<br>";
    // multiplication
    $x *= 2;
    echo "The value of x is: " . $x . "<br>";
    // division
    $x /= 20;
    echo "The value of x is: " . $x . "<br>";
    // modulus
    $x %= 5;
    echo "The value of x is: " . $x . "<br>";
    echo "<hr>";

    // comparison operators
    // Equal - checks only the values of x and y, not the type
    $x = 100;
    $y = "100";
    echo "The values of x and y are same: ";
    var_dump($x == $y);
    echo "<br>";
    // identical - checks both the value of x and y, and their types
    echo "The x and y are identical: ";
    var_dump($x === $y);
    echo "<br>";
    // not equal - checks only the values of x and y
    echo "The values of x and y are not same: ";
    var_dump($x != $y);
    echo "<br>";
    // another way of writing not equal
    echo "The values of x and y are not same: ";
    var_dump($x <> $y);
    echo "<br>";

    ?>

  </body>
</html>
