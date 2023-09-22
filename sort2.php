<?php
    
    //String original
    $temperaturas = "10 20 25 34 22 23 36 48 15";
    echo "String original: <br>";
    echo $temperaturas."<br>";
    echo "<br>";

    //String dividido
    $cadena2 = explode(" ", $temperaturas);
    echo "String dividido: <br>";
    foreach($cadena2 as $temperatura){  
        echo $temperatura."<br>";
    }
    echo "<br>";

    //Media del array
    $sumaArray = array_sum($cadena2) . "<br>";
    echo "Suma total del array: <br>" . $sumaArray;
    $mediaArray = $sumaArray / count($cadena2); //Error no encontrado - A non-numeric value encountered.
    echo "Media del array: <br>" . $mediaArray . "<br>";
    echo "<br>";

    //Obtener las 5 temperaturas minimas
    asort($cadena2);
    echo "Las 5 temperaturas minimas son: ";
    $tempMinimas = array_slice($cadena2, 0, 5);
    foreach ($tempMinimas as $temps){
        echo $temps . "<br>";
    }
    echo "<br>";

    //Obtener las 5 temperaturas maximas
    arsort($cadena2);
    echo "Las 5 temperaturas maximas son: ";
    $tempMaximas = array_slice($cadena2, 0, 5);
    foreach ($tempMaximas as $temps){
        echo $temps . "<br>";
    }
    echo "<br>"

?>