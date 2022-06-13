<?php

use App\Core\Router;
use App\Core\Tools;

require_once 'Config.php';

$router = new Router();

$router->route('get', BASE_URI . '/first/(.*)/?', "First@firstMethod");

// it means in CLASS FirstController , select SecondMethod method.
$router->route('get', BASE_URI . '/second', "First@secondMethod");

$router->route('get', BASE_URI . '/third/(.*)', "third@aaa");

$router->route('get', BASE_URI . '/fourth', "First@bbb");

$router->route('get', BASE_URI . '/', function(){
    echo 'hello world';
});

$router->curlyBraceRoute('post', BASE_URI . '/users/{user}/country/{country}', function($user, $country) {
    echo 'new writing format user ' . $user . ' country = ' . $country; 
});

$router->route('get', BASE_URI . '/about', function() {
    echo 'about page';
});

$router->route('GET', BASE_URI . '/company/(.*)/?', function($companyName){
    // /? means it can has final slash or not;
    echo 'this is company name : ' . $companyName;
});

$router->route('post', BASE_URI . '/users/(.*)/city/(.*)', function($user, $city){
    echo 'this user is from ' . $city . ' and his/her name is ' . $user;
});

// you can use delete or patch or update also
// Tools::show($router->getRouters());

$router->dispatch($action);
?>