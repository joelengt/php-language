<?php
    function speackSomething () {
        return 'ok';
    } 

    function sayHello($to) {
        echo "Hello, ".$to;
    }

    function getBuilder ($name, $age, $lastname) {
        $message = 'Hola me llamo ' . $name . $lastname . ' y tengo ' . $age . ' años de edad';
        return $message;
    }

    SayHello("World");

?>


<?php
    $var = "test";
    function SayHello() {
        global $var;
        return "Current value of var: ".$var;
    }
?>

<?php
    function GreetCoder($name, $msg = "Hello, coder!") {
        echo "A message to " . $name . ": " . $msg;
    }

    GreetCoder("John Doe");
    echo "<br /><br />";
    GreetCoder("John Doe", "This is a custom message!");
?>


<?php 
    function sayHello ($name = '', $lastName = '', $age = 0) {
        $message = 'Me llamo ' . $name . ' ' . $lastName . ' tengo ' . $age . ' años de edad.';
        return  $message;
    };

    echo sayHello('Joel', 'Gonzales', 20);
?>