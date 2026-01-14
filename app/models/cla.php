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

    public function SetInsertaPropiedades () {

    if ( $this -> conn === null ){
        die(json_encode(("Error: La conexión no se ha inicializado correctamente.")));
    }

    $datos = json_decode($_POST['carga'],true);
    $values = array_values( $datos[0] );
    [ $empleado_id, $indemnizacion_90_dias, $indemnizacion_20_dias, $prima_antiguedad, $dias_aguinaldo, $dias_prima_vacacional, $dias_vacaciones, $prestacion_vacaciones, $prestacion_pv, $prestacion_aguinaldo, $dias_año, $salario_diario, $salario_diario_integrado, $salario_P_indemnizaciones, $salario_tope_prima_antiguedad, $uma, $salario_minimo_general, $dias_a_pagar, $horas_turno, $faltas_periodo, $incapacidades, $dias_vales_despensa_efectivo, $dias_vales_despensa_especie, $antiguedad_20_dias, $umi, $septimo_dia, $infonavit_porcent, $infonavit_FD, $infonavit_CF, $dias_imss, $dias_bimestre, $dias_infonavit, $vales_despensa_QNA, $vales_despensa_SEM, $fondo_ahorro_QNA, $fondo_ahorro_SEM, $cuota_sindical, $pension_alimanticia, $bono_puntualidad, $vacaciones_pendientes, $acum_ausentismos, $acum_incapacidades, $acum_infonavit, $acum_seguro_daños_info, $acum_fondo_ahorro, $acum_exento_prima_vac, $acum_exento_aguinaldo, $base_gravable_pendiente, $aguinaldo_SDI, $prima_vacacional_SDI, $variable_SDI, $fondo_ahorro_SDI, $despensa_SDI, $gratificación ] = $values;
    $sql = "CALL `inserta_empleado1`(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,);";


    return $values;

    }

    public function SetBuscaEmpPropidades(){

        if ( $this -> conn === null ){
        die(json_encode(("Error: La conexión no se ha inicializado correctamente.")));
        }

        // Obtiene el contenido bruto de la petición
        $json = file_get_contents('php://input');

        // Decodifica el JSON a un array asociativo
        $data = json_decode($json, true);

        // Ahora puedes acceder a la llave
        $datosbusqueda = $data['empleado'] ?? null;

        $sql = '';
        // $datosbusqueda = json_decode( $_POST['empleado'], true );
        return $datosbusqueda;
    }

}