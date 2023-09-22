<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Foreach2 PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
    $colores = array("rojo" => "rojo.html", "verde" => "verde.html", "azul" => "azul.html", "gris" => "gris.html", "negro" => "negro.html");
    echo "<ul>";
    foreach ($colores as $color => $url) {
        print_r("<li>" . $color . " - " . $url . "</li>" . "<br>");
    }
    echo "</ul>";
    ?>
</body>
</html>