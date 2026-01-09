<?php

namespace App\Models;
use PDO;
use PDOException;

class Conexion2 {
    public $conn;

    public function connection(){

        $datosConexion = 'mysql:host=localhost;dbname=test';
        $usuario ='root';
        $pass = '';
        
        try {
            $this->conn = new PDO($datosConexion, $usuario, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            ]);
            return $this->conn; //Retornar la conexión
        } catch(PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
