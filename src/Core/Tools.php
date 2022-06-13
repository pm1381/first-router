<?php 

namespace App\Core;

class Tools
{
    public static function show($data, $checkDie = false)
    {
        var_dump($data);
           
        if ($checkDie){
            die();
        }
    }
}
