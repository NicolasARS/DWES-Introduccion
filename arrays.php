<?php
    //Ejercicio 1
    $nombres = array('Juan', 'Pedro', 'Andres', 'Jose');

    print_r($nombres);
    echo "<br>";
    echo "<br>";

    //Ejercicio 2
    $elementosArray = count($nombres);
    echo "El array contiene ".$elementosArray." elementos.";
    echo "<br>";
    echo "<br>";

    //Ejercicio 3
    $cadena = implode(" ", $nombres);
    echo "La cadena con los nombre del array seria: ". $cadena;
    echo "<br>";
    echo "<br>";

    //Ejercicio 4
    echo "Los elementos del array ordenado son:<br>";
    $arraySort = asort($nombres);
    foreach($nombres as &$nombre){
        print_r($nombre."<br>");
    }
    echo "<br>";
    echo "<br>";

    //Ejercicio 5
    $reversedArray = array_reverse($nombres);
    echo "El array revertido seria :<br>";
    print_r($reversedArray);
    echo "<br>";
    echo "<br>";

    //Ejercicio 6
    $search = array_search('Andres', $nombres);
    echo "La posicion de Andres en el array es: ". $search;
    echo "<br>";
    echo "<br>";

    //Ejercicio 7
    $alumnos = [["id" => 1, "nombre" => "Nicolas", "edad" => 24],
    ["id" => 2, "nombre" => "Vicent", "edad" => 22],
    ["id" => 3, "nombre" => "Andreu", "edad" => 21],
    ["id" => 4, "nombre" => "Adrian", "edad" => 19]
    ];
    echo "Array dentro de otro array:<br>";
    print_r($alumnos);
    echo "<br>";
    echo "<br>";

    //Ejercicio 8
    echo "<table border=3>";
    echo "<th colspan=3>Alumnos</th>";
    foreach ($alumnos as $alumno) {
        echo "<tr>";
        echo "<td>" . $alumno["id"] . "</td>";
        echo "<td>" . $alumno["nombre"] . "</td>";
        echo "<td>" . $alumno["edad"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<br>";


    //Ejercicio 9
    $columnaArray = array_column($alumnos, "edad");
    echo "La columna 'edad' del array 'alumnos' :<br>";
    print_r($columnaArray);
    echo "<br>";
    echo "<br>";
    
    //Ejercicio 10
    $numeros = array(1, 2, 4, 6, 6, 8, 10, 15, 30, 7);
    $sumaArray = array_sum($numeros);
    echo "El array original :<br>";
    foreach ($numeros as &$numero){
        print_r($numero."<br>");
    }
    echo "<br>";
    echo "La suma total de todos los elementos del array es: <br>".$sumaArray;
