<?php

namespace App\Controller;

use App\Core\Tools;

class FirstController
{
    /**
     * Route("/first/(.*)/?")
    */
    public function firstMethod($parametr)
    {
        Tools::show("parametr is " . $parametr);
    }

    /**
     * Route("/first")
    */
    public function secondMethod()
    {
        Tools::show("second example");
    }
}