<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Foreach PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    $colores = array("rojo", "verde", "azul", "gris", "negro");

    echo "<ul>";
    foreach ($colores as $color) {
        print_r("<li>" . $color . "</li>" . "<br>");
    }
    echo "</ul>";
    ?>
</body>

</html>