<?php

namespace App\Models;

use App\Models\ConexionDB;

use PDO;
// use PDOException;

class Conexion{

    protected $connection;

    public function __construct() {
    
        $database = new ConexionDB();
        $this->connection = $database->connection(); 

    }

    // public function query($sql){

    //     $query = $this -> connection -> prepare( $sql );
    //     $query -> execute();
    //     return $query -> fetchAll(PDO::FETCH_ASSOC);

    // }

    // public function insertEmpleado( $table, $column, $value ){

    //     $sql = "SELECT * FROM {$table} WHERE {$column} = ? ";
    //     $stmt = $this -> connection -> prepare( $sql );
    //     $stmt->execute(array($value));
    //     return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    // }

    public function get(){
        if ($this->connection === null) {
        die(json_encode("Error: La conexión no se ha inicializado correctamente."));
        }

        $datos = json_decode($_POST['carga'],true);
        $values = array_values($datos[0]);
        [ $n1, $n2, $n3, $n4 ] = $values;

        
        // $sql = "CALL `insertar_nombre_completo`(?, ?, ?, ?);";
        // $stmt = $this -> connection -> prepare( $sql );
        // $stmt->execute(array($n1, $n2, $n3, $n4));

        return $values;
        // return 'Exitoso';

    }
}