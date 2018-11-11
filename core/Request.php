<?php

class Request 

{

    public static function uri() 
    
    {

        $dir = dirname($_SERVER['PHP_SELF']);
        return trim(substr($_SERVER['REQUEST_URI'], strlen($dir) + 1), '/');

    }

}