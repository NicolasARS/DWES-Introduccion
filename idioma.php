<?php
    
    $mensaje = "";
    $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    switch($idioma){
        case "es":
            $mensaje = "Pagina en español";
            break;
        case "en":
            $mensaje = "Pagina en ingles";
            break;
        case "de":
            $mensaje = "Pagina en aleman";
            break;
        case "fr":
            $mensaje = "Pagina en frances";
            break;
        case "ca":
            $mensaje = "Pagina en catalan";
            break;
        default:
            $mensaje = "Idioma preferido no detectado";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Header idioma</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>Encabezado de respuesta</h1>
    <p>Un encabezado de respuesta es un encabezado HTTP que se puede utilizar en una respuesta HTTP y que no se relaciona con el contenido del mensaje. Los encabezados de respuesta, como Age, Location o Server, se utilizan para brindar un contexto más detallado de la respuesta.
No todos los encabezados que aparecen en una respuesta se clasifican como encabezados de respuesta según la especificación. Por ejemplo, el encabezado Content-Type es un encabezado de representación que indica el tipo original de datos en el cuerpo del mensaje de respuesta (antes de que se aplique la codificación en el encabezado de representación Content-Encoding). Sin embargo, "conversacionalmente", todos los encabezados generalmente se denominan encabezados de respuesta en un mensaje de respuesta.</p><br>
    <?php echo "$mensaje";?>
</body>
</html>
