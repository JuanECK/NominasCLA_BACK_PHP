<?php


// class empleados {

//     protected $connection;

//     protected $query;

//     public function __construct(){
//         $this -> connection();
//     }

//     public function connection(){

//         header("Access-Control-Allow-Origin: *"); 

//         header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

//         header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

//         if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
//             header('Access-Control-Max-Age: 86400');
//             header('Content-Length: 0');
//             header('Content-Type: text/plain');
//             die();
//         }

//         $datosConexion = 'mysql:host=localhost;dbname=test';
//         $usuario ='root';
//         $pass = '';
//         $arrOptions = array(
//             PDO::ATTR_EMULATE_PREPARES => FALSE, 
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
//             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
//         );

//         try{
//         $this -> connection = new PDO($datosConexion, $usuario, $pass, $arrOptions);
//         }
//         catch(PDOException $e){

//             echo "Error: " . $e->getMessage() . " producido en la línea: " . $e->getLine();
//             die();
//         }

//     }
    
// }