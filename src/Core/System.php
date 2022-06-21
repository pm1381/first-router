<?php

namespace App\Core;

use Exception;
use SebastianBergmann\CodeCoverage\Report\Html\Renderer;

class System
{
    public static function pageError($message = "error 404 ! page not found", $code)
    {
        if (DEBUG) {
            throw new Exception($message);
        }

        http_response_code($code);
        $data['head']['title']       = $code;
        $data['head']['description'] = $code;
        $data['head']['keywords'] = $code;
        $data['content']['text'] = $code;

        $controller = new Controller();
        $controller->render('error/' . $code, $data);
        exit();
    }

    public static function headerConfig()
    {
        header("Access-Control-Allow-Origin : * ");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, UPDATE");
        header('Access-Control-Allow-Headers: Content-Type, x-requested-with');
    }

    public static function redirect($url, $code = 301)
    {
        header("location: " . $url, true, $code);
        exit();
    }

    
}