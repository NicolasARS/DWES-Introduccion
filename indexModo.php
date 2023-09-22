<?php
    $mode = ($_GET['mode'] ?? ($_COOKIE['mode'] ?? "claro"));
    setcookie("mode", $mode, time() + 30 * 24 * 60 * 60);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina modo oscuro y claro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style type="text/css">
        .claro{
            background-color: #eee;
        }
        .oscuro{
            background-color: #777;
        }
    </style>
</head>
<body class="<?= $mode ?>">
    <h1>Pagina con modo oscuro y claro</h1>
    <p>Seleccione modo:</p>
    <a href="?mode=claro">Modo Claro</a>
    <a href="?mode=oscuro">Modo Oscuro</a>
    
</body>
</html>
