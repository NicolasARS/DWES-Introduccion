<?php
    
    function randomPass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $password = "";
    
    for ($i = 0; $i < $upper; $i++){
        $password .= chr (rand(65, 90));
    }

    for ($i = 0; $i < $lower; $i++){
        $password .= chr (rand(97, 122));
    }

    for ($i = 0; $i < $numeric; $i++){
        $password .= chr(rand(48, 57));
    }

    for ($i = 0; $i < $other; $i++){
        $password .= chr(rand(33, 47));
    }

    $passwordArray = str_split($password);
    shuffle($passwordArray);
    $password = implode('', $passwordArray);

    return $password;
    
}

$password = randomPass(2, 3, 6, 9);

echo "La contraseña generada es: <br>" . $password;

?>