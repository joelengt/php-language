
<?php
    // Doble igual
    $number = 42;
    if($number == 42) {
        echo 'El numero es 42';
    }

?>


<?php
    // Triple igual
    $number = 42;
    if($number === "42") {
        echo 'The number is 42!';
    }
?>


<?php
    // Sentencia else
    $word = 'hola';

    if($word === 'hola') {
        echo 'La palabra es hola';
    
    } else {
        echo 'La palabra no es hola';

    }
?>


<?php 
    // Operador diferencial !=
    $word = 'hola';

    if($word != 'hola') {
        echo 'La palabra es diferente a hola';
    
    } else {
        echo 'La palabra es hola';

    }

    // Operador diferencial !==
    $palabra = 'cuak';

    if($palabra !== 'cuak') {
        echo 'La palabra es diferente a hola';
    
    } else {
        echo 'La palabra es hola';

    }

?>


<?php 

    $value = 10;

    if($value < 10) {
        //
    }

    if($value > 10) {
        //
    }

    if($value <= 10) {
        //
    }

    if($value >= 10) {
        //
    }


?>

<?php 
    // If anidado
    $number = 10;

    if($number > 0) {
        if($number < 20) {
            echo "Number is bigger than 0 but smaller than 20!";
        }
    }

?>

<?php 

    $number = 10;

    if(($number > 0) && ($number < 20)) {
        echo "Number is bigger than 0 but smaller than 20!";
    }

    if(($number >= 2) || ($number <= 20)) {
        echo "Number is bigger than 0 but smaller than 20!";
    }

    if(!$number) {

    }
?>


<?php
    $number = 10;

    if($number > 20) {
        echo "Number is bigger than 20!";

    } elseif ($number > 10) {
        echo "Number is bigger than 10!";

    } else {
        echo "The number seems a bit low..."
    }
?>

<?php
    // Evaluate variable is exits
    if(!($value === null)) {
        echo('exits');

    } else {
        echo('es null');
    }
?>

<?php 
    // Operador Ternario
    $a = ($fruit ? $fruit : 'apple');

    $numberOfItems = 0;
    $output = "There is " . (($numberOfItems > 0) ? "something" : "nothing") . " in your basket";
    echo $output;

    // Evaluate is one variable is 
    echo (isset($value)) ? 'yes' : 'no';

?>

