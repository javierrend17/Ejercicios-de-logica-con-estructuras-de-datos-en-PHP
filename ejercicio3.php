
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Convertir cadena a array con frecuencia</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="cadena" placeholder="Ingrese su cadena">
        <button type=submit>Generar</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el texto ingresado por el usuario
        $cadena = $_POST['cadena'];

        function calcularNumeroDeVeces($texto){
            //Convirtiendo el texto ingresado a un array con el texto sin espacios
            $array = str_split(str_replace(" ", "", $texto));
            $arrayResultante = array();
    
            //Verificando cada elemento del array de referencia $array
            for ($i=0; $i <= count($array)-1; $i++) { 
    
                //Si no esta definida la cantidad, sera igual a 1 de lo contrario incrementa la cantidad
                if (!isset($arrayResultante[$array[$i]])) {
                    $arrayResultante[$array[$i]] = 1;
                }else {
                    $arrayResultante[$array[$i]]++;
                }
            }
    
            return $arrayResultante;
        }
    
        echo "<br>Su array resultante:<br><br>";
        foreach(calcularNumeroDeVeces($cadena) as $clave => $value){
            echo $clave." => ".$value." veces<br>";
        }
        
    }

?>