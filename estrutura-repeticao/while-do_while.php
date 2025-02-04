<?php
    $frutas = ["banana", "maça", "pera", "uva"];

    $contador = count($frutas);

    $i = 3;
    
    do {
        
        echo $frutas[$i] . "\n";

        $i++;

    } while ($i < $contador);
?>