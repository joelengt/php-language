<?php 
    $name = 'something';
    echo '<strong>' . $name . '</strong>';

    switch ($name) {
        case 'something':
            echo 'The option selected is something';
            break;

        case 'nothing':
            echo 'The option selected is nothing';
            break;

        default:
            echo 'Nothing';
    }
        
?>