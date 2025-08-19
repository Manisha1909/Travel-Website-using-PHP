<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container"></div>
    This is my first php website.
    <?php
    echo "<br>";
    echo " Hello world this is written is php.";
    echo "<br>";
    $a= 4;
    $b=5;
    echo $a+$b;
    // OPERATORS IN PHP
    // Arithmatic OPERATORS
    echo "<h3> Arithmatic Operators </h3>";
    
    echo "The value of a+b is: ";
    echo $a+$b;
    // Assignments operators
    echo "<h3> Assignments Operators </h3>";
    $c=$b;
    $c+=2;
    echo "the value of new variable c is: ";
    echo $c;
    // Comparison operators
    echo "<h3> Comparison Opearators </h3>";
    echo "The value of 1==4 is: ";
    echo var_dump(1==4);
    // Increment and Decrement
    echo "<h3> Increment and decrement Opearators </h3>";
   echo $a++;
   echo"<br>";
   echo $a--;
   echo"<br>";
   echo ++$a;
   echo"<br>";
   echo --$a;
    // Logical
    echo "<h3> Logical Opearators </h3>";
    $myVar = (false) and (true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (True or False);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (true xor true);
    echo var_dump($myVar);
    echo "<br>";
    $myVar = (false xor true);
    echo var_dump($myVar);
    ?>

    <?php
    // Data Types in PHP
    // String, Integer, Float, Boolean, Array, Object
    echo "<h3> String Data Type </h3>";
    $var = "This is a string";
    echo $var;
?>
    <?php
    echo "<h3> Constant defining </h3>";
    define('pi', 3.14);
    echo pi;
    ?>
</body>
</html>