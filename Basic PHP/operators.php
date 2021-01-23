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
    // not identical - checks both the values and types of x and y
    echo "The x and y are not identical: ";
    var_dump($x !== $y);
    echo "<br>";
    // greather than - works for both same type and different type
    $x = 100;
    $y = "50";
    echo "x is greater than y: ";
    var_dump($x > $y);
    echo "<br>";
    // less than - works for both same type and different type
    echo "y is less than x: ";
    var_dump($y < $x);
    echo "<br>";
    // greater than or equal - works for both same type and different type
    echo "x is greater than or equal y: ";
    var_dump($x >= $y);
    echo "<br>";
    // less than or equal - works for both same type and different type
    echo "x is less than or equal y: ";
    var_dump($x <= $y);
    echo "<br>";
    // spaceship - checks if the value is greater than or equal or less than both at the same time
    // for greater than
    $x = 100; // works both for same type and different type
    $y = "50";
    echo "x is greater than y: ";
    var_dump($x <=> $y);
    echo "<br>";
    // for less than
    $x = 10;
    $y = 50;
    echo "x is less than y: ";
    var_dump($x <=> $y);
    echo "<br>";
    // for equal
    $x = 100;
    $y = 100;
    echo "x is equal to y: ";
    var_dump($x <= $y);
    echo "<br>";
    echo "<hr>";

    // increment/decrement operators
    // pre-increment operators - increment the value instantly
    $x = 10;
    echo "Before pre-increment x is: " . $x . "<br>";
    echo "After pre-increment x is: " . ++$x . "<br>";
    // post-increment - increment value after the execution
    $x = 10;
    echo "Before post-increment x is: " . $x . "<br>";
    echo "After post-increment x is: " . $x++ . "<br>";
    echo "Now x is: " . $x . "<br>";
    // pre-decrement - same as pre-increment
    $x = 10;
    echo "Before pre-decrement x is: " . $x . "<br>";
    echo "After pre-decrement x is: " . --$x . "<br>";
    // post-decrement - same as post-increment
    $x = 10;
    echo "Before post-decrement x is: " . $x . "<br>";
    echo "After post-decrement x is: " . $x-- . "<br>";
    echo "Now x is: " . $x . "<br>";
    echo "<hr>";

    ?>

  </body>
</html>
