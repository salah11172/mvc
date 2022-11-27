<?php
use src\Http\Route;
use src\Http\Request;
use src\Http\Response;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../routes/web.php' ;
//Route::get('/',;
$req=new Request ;
$res=new Response;

$route = new Route( $req ,  $res) ;
//dump($route->resolve());