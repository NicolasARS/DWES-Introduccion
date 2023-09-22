<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sort PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $edades = array("Nicolas" => 24, "Antonio" => 19, "Mateo" => 25, "Jose" => 23);
    echo "Array original: <br>";
    echo "<ul>";
    foreach ($edades as $nombre => $edad) {
        print_r("<li>" . $nombre . " - " . $edad . "</li>" . "<br>");
    }
    echo "</ul>";
    echo "<br>";

    //Ordenado por nombre ascendente
    ksort($edades);
    echo "Array ordenado por nombre ascendente: <br>";
    echo "<ul>";
    foreach ($edades as $nombre => $edad) {
        echo("<li>" . $nombre . " - " . $edad . "</li>" . "<br>");
    }
    echo "</ul>";
    echo "<br>";

    //Ordenado por edad Ascendente
    asort($edades);
    echo "Array ordenado por edad ascendente: <br>";
    echo "<ul>";
    foreach ($edades as $nombre => $edad) {
        echo("<li>" . $nombre . " - " . $edad . "</li>" . "<br>");
    }
    echo "</ul>";
    echo "<br>";

    //Ordenado por nombre descendente
    krsort($edades);
    echo "Array ordenado por nombre descendente: <br>";
    echo "<ul>";
    foreach ($edades as $nombre => $edad) {
        echo("<li>" . $nombre . " - " . $edad . "</li>" . "<br>");
    }
    echo "</ul>";
    echo "<br>";

    //Ordenador por edad descendente
    arsort($edades);
    echo "Array ordenado por edad descendente: <br>";
    echo "<ul>";
    foreach ($edades as $nombre => $edad) {
        echo("<li>" . $nombre . " - " . $edad . "</li>" . "<br>");
    }
    echo "</ul>";
    echo "<br>";

?>
</body>
</html>
