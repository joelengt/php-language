<?php
    $array = array();
?>

<?php
    $animals = array("Monkey", "Lion", "Turtle", "Horse");
?>


<?php
    $animals = array("Monkey", "Lion", "Turtle", "Horse");
    echo $animals[2];
?>

<?php 
    $datos = [
        "numbers" => [1,2,3,4],
        "age" => 20,
        "name" => 'Joel',
        "lastName" => 'Gonzales'
    ];

?>


<?php
    $namesAndAges = array("John Doe" => 45, "Jane Doe" => 33, "Dog Doe" => 11); 
    echo "The age of Jane Doe: " . $namesAndAges["Jane Doe"];
?>

<?php
    $names = array();
    $names[] = "John Doe";
    $names[] = "Jane Doe";
    $names[] = "Dog Doe";
    echo $names[1];
?>


<!-- Multidimensional arrays -->
<?php
    $contacts = array();

    $contacts["Friends"] = array("Me", "John Doe");
    $contacts["Family"] = array("Mom", "Dad");
    $contacts["Enemies"] = array("Stalin", "Hitler");

    foreach($contacts as $categoryName => $value)
    {
        echo "<b>" . $categoryName . ":</b><br />";
        foreach($contacts[$categoryName] as $name)
        {
            echo $name . "<br />";
        }
        echo "<br />";
    }
?>



<?php 
    
    $fruits = [
        'navideñas' => ['pino', 'muerdago','cocoa'],
        'verano' => ['banana', 'coco'],
        'invierno' => ['tomatoe', 'apple','pineapple','watermelon']
    ];

    foreach ($variable as $key => $value) {
        echo $key;
    }


?>



<?php 
    $fruits = [
        'navideñas' => ['pino', 'muerdago','cocoa'],
        'verano' => ['banana', 'coco'],
        'invierno' => ['tomatoe', 'apple','pineapple','watermelon']
    ];

    foreach ($fruits as $key => $value) {
        echo $key . ' ---> <br> ';
        foreach ($value as $val) {
            echo $val . ' <br>';
        }
    }
?>


<!-- More Arrays -->

<!-- Implode and explode -->
<?php 
    $values = "Rabbit|Whale|Penguin|Bird";

    $array = explode("|", $values);
    print_r($array);

    echo "<br /><br />";

    $string = implode(" and ", $array);
    echo $string;

?>

<!-- Is a value in the array?  -->

<?php
    $animals = array("Dog", "Tiger", "Snake", "Goat");

    if(in_array("Snake", $animals))
        echo "Snake is in the array!";
    else
        echo "No snake in the array!";
?>


<!-- Getting a random element  -->

<?php
    $animals = array("Dog", "Tiger", "Snake", "Goat");
    $randomAnimal = $animals[array_rand($animals, 1)];
    echo "Random animal: " . $randomAnimal;
?>

<!-- Sorting arrays -->

<?php 
    
    $animals = array("Dog", "Tiger", "Snake", "Goat", "Rabbit", "Whale", "Bird");
    echo "Unsorted animals: " . implode(", ", $animals);
    echo "<br /><br />";

    sort($animals);
    echo "Sorted animals: " . implode(", ", $animals);
    echo "<br /><br />";

    $animals = array_reverse($animals);
    echo "Sorted animals, descending order: " . implode(", ", $animals);
    
?>