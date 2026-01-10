<?php

namespace App\Controllers;

// use App\Models\Conexion;
use App\Models\CLA;

class AllControler {

    
    // public function inserta(){
    //     $conexionModelo = new Conexion();
    //     return json_encode($conexionModelo -> get());
    // }

    public function insertaEmpleado(){
        $conexionModelo = new CLA();
        return json_encode($conexionModelo -> SetInsertaEmpleado());
    }
    
    
    // public function index(){
        
    //     $conexionModelo = new Conexion();
    //     return $conexionModelo -> query( 'SELECT * FROM `prueba`' );
    // }

    // public function index2(){
        
    //     // $conexionModelo = new CLA();
    //     // return $conexionModelo -> query();
    // }

    // public function consulta(){
    //     $conexionModelo = new Conexion();
    //     return $conexionModelo -> insertEmpleado( 'prueba', 'nombre_1', 'carlos' );
    // }
}