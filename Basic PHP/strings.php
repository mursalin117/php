<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test 8</title>
  </head>
  <body>

    <?php
    // string length - strlen() function
    echo strlen("Hello wrold!"); // outputs 12
    echo "<br>";

    // string word count - str_word_count() function
    echo str_word_count("Hello world!"); // outputs 2
    echo "<br>";

    // string reverse - strrev() function
    echo strrev("Hello world!"); // outputs !dlrow olleH
    echo "<br>";

    // text search in a string - strpos() function
    echo strpos("Hello world!", "world");
    echo strpos("Hello world!", "l"); // also works with letter
    echo "<br>";

    // text replacing in a string - str_replace() function
    echo str_replace("world", "Dolly", "Hello world!");
    echo "<br>";
    echo str_replace("l", "d", "Hello world!"); // works fine with letter
    echo "<br>";
    echo str_replace("lo", "loooo", "Hello world!"); // works fine with group of letters
    echo "<br>";
    ?>

  </body>
</html>
