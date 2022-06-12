<?php 

namespace App\Core;

class Tools
{
    public static function show($data, $checkDie = false)
    {
        if (is_array($data)) {
            print_r($data);
        } else {
            echo $data;
        }

        
        if ($checkDie){
            die();
        }
    }
}
