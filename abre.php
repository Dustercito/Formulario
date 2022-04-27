<?php
    $conexion = new mysqli("localhost", "root", "", "transporte");
    if($conexion){
        echo "Te aviso que ya te conectaste a la base de datos!";
    }else{
        echo "Fallo la conexion a la base de datos";
    }