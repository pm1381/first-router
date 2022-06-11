<?php

use App\Core\Router;
require_once './Router.php';

$router = new Router();

$router->route('/', function(){
    echo 'hello world';
});

$router->route('/about', function(){
    echo 'thanks for watching';
});

$router->dispatch($action);

?>