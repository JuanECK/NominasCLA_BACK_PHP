<?php

namespace App\Models;

use App\Models\ConexionCLA;

class CLA {
    protected $conn;

    public function __construct()
    {
        $database = new ConexionCLA();
        $this -> conn = $database -> connection();
    }

    public function SetInsertaEmpleado(){

        if ($this->conn === null) {
        die(json_encode("Error: La conexión no se ha inicializado correctamente."));
        }

        $datos = json_decode( $_POST['carga'], true );
        // echo json_encode($datos);
        $values = array_values( $datos[0] );
        [ $codigo_empleado, $empleado, $estatus, $puesto, $departamento, $salario_dia, $sueldo_mensual, $RFC, $NSS, $CURP, $fecha_ingreso, $fecha_reingreso, $fecha_baja, $domicilio, $codigo_pos, $estado, $fecha_nacimiento, $_decimal, $edad, $telefono, $sexo, $estado_civil, $correo ] = $values;

         $sql = "CALL `inserta_empleado1`(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $this -> conn -> prepare( $sql );
        $stmt->execute(array($codigo_empleado, $empleado, $estatus, $puesto, $departamento, $salario_dia, $sueldo_mensual, $RFC, $NSS, $CURP, $fecha_ingreso, $fecha_reingreso, $fecha_baja, $domicilio, $codigo_pos, $estado, $fecha_nacimiento, $_decimal, $edad, $telefono, $sexo, $estado_civil, $correo));
        // return 'exitoso';
        return $values;
    }
}