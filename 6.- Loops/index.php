<?php 
    // While
    $i = 0;
    while($i <= 10) {
        echo 'Value: ' . $i;
        $i++;
    }

?>

<?php 
    // Do while
    do {
        echo 'element ' . $i . '<br>';
        $i++;
    } while($i <= 20);

?>

<?php 
    // For
    for($i = 0; $i <= 20; $i++) {
        echo $i . '<br>';
    }
?>

<?php 

    // Foreach
    $fruits = ['banana','apple','pineapple','orange','strowberry'];

    // Sample 1
    foreach($fruits as $value) {
        echo $value;
    }

    $fruits = [
        'name' => 'Joel',
        'lastName' => 'Gonzales',
        'age' => 20,
        'nickname' => '@joelengt'
    ];

    // Sample 2
    foreach($fruits as $key => $value) {
        echo 'Attibute ' . $key . ' have value ' . $value . '<br>';
    }
?>
