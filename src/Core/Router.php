<?php
namespace App\Core;
class Router
{
    private $routers;

    public function __construct()
    {
        $this->routers = [];
    }

    public function route($action, $callback)
    {
        $action = trim($action, '/');
        $routers[$action] = $callback;
    }

    public function dispatch($action)
    {
        $action = trim($action, '/');

        $callback = $this->routers[$action];

        call_user_func($callback);
    }
}