<?php 
    
     $value = '';

    try {
        
        if($value === '') {
            throw new Exception('Error word');
        }

        return $value;  // El valor de retorno, es para que continue su camino, si too esta ok

    } catch(Exception $e) {
        print $e->getMessage();
    }
    
?>