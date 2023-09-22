<?php 

    function partlist($array){
        $resultado = array();
        $count = count($array);

        for ($i = 1; $i < $count; $i++){
            $parte1 = implode(" ", array_slice($array, 0, $i));
            $parte2 = implode(" ", array_slice($array, $i));

            $resultado[] = [$parte1,$parte2];
        }
            return $resultado;
        

    }

        $cadenas = array("Esto", "es", "una", "prueba", "PHP");

        $divisiones = partlist($cadenas);
        print_r($divisiones);


?>