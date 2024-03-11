<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h2>Ejercicio de patron de piramide con asteriscos</h2>
    <form action="" method="POST">
        <input type="number" name="altura" placeholder="Altura">
        <button type = "submit">Generar</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $altura = $_POST["altura"];

        echo "<pre>";

        for ($i = 1; $i <= $altura; $i++) {
            
            for ($j = 1; $j <= $altura - $i; $j++) {
                echo " ";
            }

            for ($k = 1; $k <= 2 * $i - 1; $k++) {
                echo "*";
            }

            echo "<br>";
        }

        echo "</pre>";
    }

?>
