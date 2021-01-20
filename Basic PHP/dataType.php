<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 7</title>
  </head>
  <body>

    <?php
    // string type data
    $x = "Hello World!";
    $y = 'Hello World!';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    var_dump($x); // var_dump() is a function for showing the variable data type
    echo "<br>";
    var_dump($y);
    echo "<br>";

    // integer type data
    $a = 5989;
    var_dump($a);
    echo "<br>";

    // floating point type data
    $x = 10.365;
    var_dump($x);
    echo "<br>";

    // boolean type data
    $x = true;
    $y = false;
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";

    // array type data
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";

    // object type data
    class Cars {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }

    $myCar = new Cars("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Cars("red", "Toyota");
    echo $myCar->message();
    echo "<br>";

    // null type value
    $x = "Hello World!";
    $x = null;
    var_dump($x);
    echo "<br>";
    ?>

  </body>
</html>
