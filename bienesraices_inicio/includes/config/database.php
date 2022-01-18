<?php
function conectarDB(): mysqli {
    $db = mysqli_connect('localhost','marco', 'admin', 'bienes_raices' );

    if (!$db) {

        echo "No pudo conectarese a la Base de Datos";
        
    }
    return $db;
}
    ?>
