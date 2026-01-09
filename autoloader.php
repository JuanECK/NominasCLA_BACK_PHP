<?php

spl_autoload_register(function($clase){
    // echo json_encode($clase);
    $ruta = '../'. str_replace("\\","/",$clase) . ".php";

    if(file_exists($ruta)){
        require_once $ruta;
    } else {
        // echo $ruta;
        die("No se pudo cargar la clase $clase");
    }
});