<?php
require("conexion.php");

function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $user = filtrado($_POST["user"]);
    $email = $_POST["email"];
    $avatar = $_FILES["avatar"];
}

$directorioSubida = "uploads/";
$max_file_size = "51200";
$extensionesValidas = array("jpg", "png", "gif");

if(isset($_POST["submit"]) && isset($_FILES['avatar'])){

    $errores = array();
    $nombreArchivo = $_FILES['avatar']['name'];
    $filesize = $_FILES['avatar']['size'];
    $directorioTemp = $_FILES['avatar']['tmp_name'];
    $tipoArchivo = $_FILES['avatar']['type'];
    $arrayArchivo = pathinfo($nombreArchivo);
    $extension = $arrayArchivo['extension'];
    // Comprobamos la extensión del archivo

    if(!in_array($extension, $extensionesValidas)){
        $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
    }

    // Comprobamos el tamaño del archivo

    if($filesize > $max_file_size){
        $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";

    }
    // Comprobamos y renombramos el nombre del archivo

    $nombreArchivo = $arrayArchivo['filename'];
    $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
    $nombreArchivo = $nombreArchivo . rand(1, 100);
    // Desplazamos el archivo si no hay errores

    if(empty($errores)){
        $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
        move_uploaded_file($directorioTemp, $nombreCompleto);
        print "El archivo se ha subido correctamente";
    }

if (empty($errores)){
    $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
    $pdoRP = $pdo->prepare("INSERT INTO users (user, email, estudios, avatarLocation) VALUES (:user, :email, :estudios, :avatar)");
    $pdoRP->bindParam(":user", $usuario);
    $pdoRP->bindParam(":email", $email);
    $pdoRP->bindParam(":estudios", $estudios);
    $pdoRP->bindParam(":avatar", $nombreCompleto);

    $pdoRP->execute();
}
}