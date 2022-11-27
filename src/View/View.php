<?php
namespace src\View;

class View
{
    public static function make($view,$params=[]){
        $baseContent = self::getBaseContent();

        $viewContent = self::getViewContent($view, params: $params);

        return (str_replace('{{content}}', $viewContent, $baseContent));
    }

}