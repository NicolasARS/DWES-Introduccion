<?php
    
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
    
    
    if (isset($_GET['id'])){
        $idProducto = $_GET['id'];
        if (array_key_exists($idProducto, $productos)){
            echo "El producto identificado con el ID: <strong>".$idProducto."</strong> es:". $productos[$idProducto];
        }else{
            echo "No se encontro ningun producto con el ID <strong>".$idProducto."</strong>";
        }
    }else{
        echo "Introduce un ID.";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Header productos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Header productos</h1>
    
</body>
</html>