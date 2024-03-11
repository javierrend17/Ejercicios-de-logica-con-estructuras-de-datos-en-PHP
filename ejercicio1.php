<?php

    $listanumeros = array(1,2,3,4,5,6);

    function invertirArray($array){

        echo "Array original: <br><br>";
        foreach ($array as $value) {
            echo $value . "<br>";
        }
        echo "<br>";

        $array_r = array();
        for ($i=count($array)-1; $i>=0; $i--) {
            $array_r[($i-(count($array)-1))/-1] = $array[$i];
        }
        echo "Array al reves: <br><br>";


        return $array_r;
    }

    

    foreach (invertirArray($listanumeros) as $value) {
        echo $value . "<br>";
    }
    
?>