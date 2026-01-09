<?php

namespace Lib;

class Route {

private static $routes = [];

public static function get($uri, $callback){
    $uri = trim($uri, 'BackNominas/public');
    self::$routes['GET'][$uri] = $callback;
}

public static function post($uri, $callback){
    $uri = trim($uri, 'BackNominas/public');
    self::$routes['POST'][$uri] = $callback;
}

public static function dispatch(){

    $uri = $_SERVER['REQUEST_URI'];

    $uri = trim($uri, 'BackNominas/public');

    $method = $_SERVER['REQUEST_METHOD'];
    
    foreach(self::$routes[$method] as $route => $callback){

        if ( preg_match( "#^$route$#", $uri, $matches ) ){
            
            $params = array_slice($matches,1);

            // if( is_callable($callback) ){
            //     $resp = $callback(...$params);
            // }

            if( is_array($callback) ){
                $controller = new $callback[0];
                $resp = $controller -> {$callback[1]}(...$params);
            }

            if( is_array($resp) || is_object($resp) ){
                header('Content-Type: application/json');
                echo json_encode($resp);
            } else {
                echo $resp;
            }
            return;
        }

        // if($route == $uri){
        //     $callback();
        //     echo json_encode(self::$routes);
        //     return;
        // }
    }
    echo '404 No encontrado  -  ';

}

}