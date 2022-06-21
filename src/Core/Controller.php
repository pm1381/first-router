<?php

namespace App\Core;

class Controller {

    public $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function render($path, $data = [])
    {
        $this->data = json_decode(json_encode($data, JSON_UNESCAPED_UNICODE), TRUE);
        $filePath = TEMPLATE . $path . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
        } else {
            System::pageError("class " . $filePath . ".php not found", 404);
        }
    }

    public function readJson($data)
    {
        System::headerConfig();
        return json_encode($data);
    }

    public function getData()
    {
        return $this->data;
    }
}