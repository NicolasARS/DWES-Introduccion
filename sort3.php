<?php
//Funcion comparacion
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

//array original
$array = array("casa" => "lugar donde viven personas", "carro" => "vehiculo que transporta personas o cosas", "barco" => "medio de transporte acuatico");
echo "Array original: <br>";
foreach ($array as $cosa => $descipcion) {
    echo $cosa . " - " . $descipcion . "<br>";
}
echo "<br>";

//Ordenado segun la longitud de la descripcion
uasort($array, 'cmp');
echo "Array ordenado segun la longitud de la descripcion: <br>";
foreach ($array as $cosa => $descipcion) {
    echo $cosa . " - " . $descipcion . "<br>";
}
