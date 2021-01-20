<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 11</title>
  </head>
  <body>

    <?php
    // define(name, value, case-insensitive) - this is the function for constant defining
    // by default the case-insensitive is false.

    // case-sensitive example
    define("GREETING", "Welcome to w3schools.com!");
    echo GREETING . "<br>";

    // case-insensitive example
    define("GREETING", "Welcome to w3schools.com!", ture);
    echo greeting . "<br>";

    // constant-array can also be defined using this function
    define("cars", [
      "Alfa Romeo",
      "BMW",
      "Toyota"
      ]);
    echo "The first car is: " . cars[0] . "<br>";
    echo "The second car is: " . cars[1] . "<br>";
    echo "The third car is: " . cars[2] . "<br>";

    // constant as a global
    define("GREETINGS", "Welcome to w3schools.com!");

    function myTest(){
      echo GREETINGS;
    }

    myTest();
    ?>

  </body>
</html>
