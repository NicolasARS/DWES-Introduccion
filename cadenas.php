<?php
//Ejercicio 1
    
    $nombre = isset($_GET['nombre']) ? trim($_GET['nombre']) : 'Alejandro';
    echo "El nombre añadido es: " . $nombre . "<br>";

//Ejercicio 2

    echo "tiene una longitud de ".strlen ($nombre)."<br>";

//Ejercicio 3

    echo "en mayusculas: ".strtoupper($nombre)."<br>";

//Ejercicio 4

    echo "en minusculas: ".strtolower($nombre)."<br>";

//Ejercicio 6

    $prefijo = isset($_GET['prefijo']) ? trim($_GET['prefijo']) : 0;
    echo "El prefijo añadido es: ".$prefijo."<br>";
    $prefijo = strpos($nombre, $prefijo);
    if ($prefijo == false){
        echo "El nombre comienza con el prefijo"."<br>";
    }else {
        echo "El nombre no comienza con el prefijo"."<br>";
    }

//Ejercicio 7
    $contador = substr_count(strtolower($nombre), 'a');
    echo "La letra a aparece : ".$contador." veces."."<br>";

//Ejercicio 8

    $posicion = stripos($nombre, 'a', 0);
    echo "La primera posicion de la letra a es :".$posicion."<br>";

//Ejercicio 9

    echo "El nombre sustituyendo la o por 0 seria: ".str_ireplace('o', '0', $nombre)."<br>";

//Ejercicio 10

    $url = "http://elpepe:hola@127.0.0.1:8080/cadenas.php?nombre=nicolaas&prefijo=n";
    $partes = parse_url($url);

    echo "SCHEME: " . $partes['scheme']."<br>";
    echo "PATH: " . $partes['path']."<br>";
    echo "QUERYSTRING: " . $partes['query']."<br>";
?>

