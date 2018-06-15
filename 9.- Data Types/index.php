<?php 
    boolean - a boolean is actually much like an integer, but with only two possible values: 0 or 1, which is either false or true. 

    integer - a number with no decimals, e.g 3 or 42. 

    float (sometimes referred to as double) - a number that may include decimals, e.g. 42.3 or 10.9. 

    string - A number of characters, which combined makes a text string. 



?>



<?php 

    // complex datatypes: 
    array - holds an array of items, e.g. several strings or several integers. An array may contain variables which are arrays which are arrays and so on. 

    object - a reference to an instance of a class. This is related to Object Oriented programming, which we will talk more about later on in this tutorial. 

?>

<?php 
    // Special types
    resource - holds a reference to a special external resource. It may be a file resource, or perhaps an open database connection. 

    NULL - a value of null is nothing. It's not the same as 0 (zero), because that's actually a value. Null is truly nothing. Variables which have not yet been assigned a value, or which you have used the unset() method on, will carry the NULL value. This is useful if you wish to check whether or not a variable contains any value - you may compare it against the NULL constant. 

?>

<!-- Numbers  -->
<?php
$number1 = 6;
$number2 = 2;

echo "Addition: " . ($number1 + $number2);
echo "<br /><br />";
echo "Substraction: " . ($number1 - $number2);
echo "<br /><br />";
echo "Multiplication: " . ($number1 * $number2);
echo "<br /><br />";
echo "Division: " . ($number1 / $number2);
echo "<br /><br />";
?>

<!--  Evaluando si es numero -->
<?php
$number1 = "10";
$number2 = 20;

if((is_numeric($number1)) && (is_numeric($number2)))
    echo "Result: " . ($number1 + $number2);
else
    echo "Both variables have to be numbers!";
?>

<!-- Get type -->
<?php
    $var = "30";
    echo "The current datatype of var is: " . gettype($var) . "<br /><br />";

    $var = (int)$var;
    echo "The current datatype of var is: " . gettype($var);
?>

<!-- Float -->
<?php 
    $number1 = 10;
    $number2 = 3;
    $number3 = 5;

    $result = $number1 / $number2;

    echo "Result as a float: " . $result . "<br /><br />";
    echo "Result as a float, rounded: " . round($result, 2) . "<br /><br />";
    echo "Result as an integer: " . (int)$result . "<br /><br />";
    echo "Multiplication as a float: " . ($result * $number3) . "<br /><br />";
    echo "Multiplication as an integer: " . ((int)$result * $number3) . "<br /><br />";
 ?>


 <!-- Working with string -->
 <?php
     $var = "A string";
     echo $var;
 ?>

<?php
    $name = $firstName . " " . $lastName;
?>


<!-- More String -->

<!-- The Lenght of string -->
<?php
    $string = "Hello world!";
    echo "Length of string: " . strlen($string);
?>


<!--Lowercase and uppercase -->
<?php
    $string = "Hello world!";
    echo strtolower($string);
    echo "<br />";
    echo strtoupper($string);
?>

<!-- Find a part of a string -->
<?php
    $string = "Hello world!";
    echo "Position of world in string: " . strpos($string, "world");
?>


<!-- Retrieve a part of a string -->
<?php 
    $string = "Hello world!";
    $startPos = strpos($string, "world");
    $length = strlen("world");
    $substring = substr($string, $startPos, $length);
    echo "A specific part of the string: " . $substring;
?>


