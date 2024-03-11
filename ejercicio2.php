<?php

    $numeros_enteros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $totalSuma = 0;

    for ($i=0; $i <= count($numeros_enteros)-1; $i++) { 
        if ($numeros_enteros[$i] % 2 == 0) {
            $totalSuma += $numeros_enteros[$i];
        }
    }
    echo "<br>Su array:<br><br>";
    foreach ($numeros_enteros as $value){
        echo $value."<br>";
    }
    echo "<br>";
    echo "La suma total de los numeros pares del array es: ".$totalSuma;
?>