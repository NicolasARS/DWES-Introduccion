<?php
require('conexion.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $pdoSt = $pdo->prepare('SELECT * FROM vehiculo WHERE id = ?');
    $pdoSt -> bindParam(1, $id, PDO::PARAM_INT);
    $pdoSt -> execute();
    
    while($registro = $pdoSt->fetch()){
        echo "Vehiculo ".$registro['marca'].": ";
        echo $registro['modelo']."<br>";
        echo "Año :".$registro['año']."<br>";
    }

}