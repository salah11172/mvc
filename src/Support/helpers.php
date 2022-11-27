<?php
if (function_exists('env')){
    function env($key , $defualt = null ){
        return $_ENV[$key] ?? value($defualt);
    }
}

if (function_exists('value')){
    function value($value){
        return ($value instanceof Closure)? $value() : $value;
    }
}