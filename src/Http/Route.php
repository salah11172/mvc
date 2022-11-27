<?php
namespace src\Http;
use Request;
use Response;

class Route{


    public static array $routes = [];
    public   $request;
    public   $response;

    /**
     * @param  $request
     * @param  $response
     */
    public function __construct( $request , $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public static function get($route, $action)
    {
        return self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }

    public function resolve(){
        $path=$this->request->getPath();
        $method=$this->request->getMethod();
        $action=self::$routes[$method][$path] ?? false ;

        if(!$action){
            return;
        }

        if (is_callable($action)){
            call_user_func_array($action, []);
        }

        if (is_array($action)){
            call_user_func_array([$action[0],$action[1]], []);
        }

    }




}