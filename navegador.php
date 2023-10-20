<?php
    
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    $esFirefox = null;

    if (strpos($navegador, "Firefox")){
        $esFirefox = "Navegador Firefox detectado";
    }else{
        echo "Usar navegador Firefox para visualizar esta pagina";
    }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Header navegador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Header Navegador</h1>
    <?php echo "$esFirefox";?>
</body>
</html>