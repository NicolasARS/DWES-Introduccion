<?php 

    echo "Cadena array original: <br>";
    $cadenas = array("Hola", "Esto ", "es ", "una cadena de ", "prueba", "PHP");
    foreach ($cadenas as $cadena){
        echo $cadena . "<br>";
    }
    echo "<br>";
    

    function obtenerLongitud ($cadena){
        return strlen($cadena);
    }

    $longitudes = array_map('obtenerLongitud', $cadenas);

    $longitudMaxima = max($longitudes);
    $longitudMinima = min($longitudes);

    echo "La longitud maxima es: <br>" . $longitudMaxima;
    echo "<br>";
    echo "<br>";
    echo "La longitud minima es: <br>" . $longitudMinima;

?>