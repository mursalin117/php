<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 5</title>
  </head>
  <body>

    <?php
    $x = 5; // global scope

    function myTest(){
      // using x inside this function will generate an error
      echo "<p>Variable x inside the function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside the function is : $x</p>";
    ?>

    <?php
    function myTest1(){
      $y = 5; // local scope
      echo "<p>Variable y inside the function is: $x</p>";
    }
    myTest1();

    // using y outside the fucntion will generate an error
    echo "<p>Variable y outside the function is: $x</p>";
    ?>

    <?php
    $x = 5;
    $y = 10;

    function myFuction(){
      global $x, $y; // for accessing the global variable in a function, we have to use global keyword
      $y = $x + $y;
    }
    myFuction();

    echo "<p>The value of y is: $y</p>";
    ?>

    <?php
    $x = 5;
    $y = 13;

    function myFuction1(){
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; // global variables are stored in GLOBALS array and
      // it can be accessed by the function directly
    }
    myFuction1();

    echo "<p>The value of y is: $y</p>";
    ?>

    <?php
    function myFuction2(){
      static $x = 0;
      echo "<p>Now the value of x is: $x</p>";
      $x++;
    }
    myFuction2();
    myFuction2();
    myFuction2();
    //myFuction1();
    //echo "<p>The value of y is: $y</p>";
    ?>

  </body>
</html>
