<?php
namespace App\Core;
class Router
{
    private $routers;

    public function __construct()
    {
        $this->routers = [];
    }

    public function route($method, $action, $callback)
    {
        $action = trim($action, '/');
        if (strpos($action, "{") !== false) {
            $action = preg_replace('/{[^}]+}/', '(.*)', $action);
        }
        $this->routers[$action] = ['method' => $method, 'callback' => $callback];
    }

    public function getRouters()
    {
        return $this->routers;
    }

    public function dispatch($action)
    {
        $action = trim($action, '/');
        $sentMethod = $_SERVER['REQUEST_METHOD'];
        $callback = null;
        $params = [];
        foreach ($this->routers as $router => $handler) {
            if(preg_match("%^{$router}$%", $action, $matches)) {
                if (strtoupper($handler['method']) == $sentMethod) {
                    $callback = $handler['callback'];
                    unset($matches[0]);
                    $params = $matches;
                    break;
                }
            }
        }

        if ($callback == null || !is_callable($callback)) {
            http_response_code(404);
            echo "page not found";
        } else {
        }
            call_user_func($callback, ...$params);
    }
}