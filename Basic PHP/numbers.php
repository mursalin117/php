<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 9</title>
  </head>
  <body>

    <?php
    // integer value checking
    $x = 5985;
    // is_int() function for checking integer
    var_dump(is_int($x));
    echo "<br>";
    $x = 59.85;
    // is_integer() function for checking integer
    var_dump(is_integer($x));
    echo "<br>";
    $x = 5985;
    // is_long() function for checking integer
    var_dump(is_long($x));
    echo "<br>";

    // floating point number checking
    $x = 10.356;
    // is_float() function for checking floating number
    var_dump(is_float($x));
    echo "<br>";
    $x = 10;
    // is_double() function for checking floating number
    var_dump(is_double($x));
    echo "<br>";

    // infinity- number higher than the floating number is considered as infinity in php
    $x = 1.9e411;
    // is_finite() function for checking infinity
    var_dump(is_finite($x));
    echo "<br>";
    // is_infinite() function for checking infinity
    var_dump(is_infinite($x));
    echo "<br>";
    echo PHP_FLOAT_MAX . "<br>";

    // php not a number checking. It is used for impossible mathematical operation.
    $x = acos(5);
    var_dump($x); // returns a NAN value (Not A Number)
    echo "<br>";
    echo var_dump(is_nan($x));
    echo "<br>";

    // php numerical string -checks whether a sting has a numberic value or not
    $x = 5985;
    // is_numeric() function for checking the numeric value of a string
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "5989";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";

    // casting value
    // casting float to integer
    $x = 2345.6789;
    $int_cast = (int) $x;
    echo $int_cast . "<br>";
    // casting string to integer
    $x = "2345.6789";
    $int_cast = intval($x); // intval() function can also be used to convert to integer 
    echo $int_cast . "<br>";
    ?>

  </body>
</html>
