<?php

use App\Core\Router;
require_once 'Config.php';

$router = new Router();

$router->route('get',BASE_URI . '/', function(){
    echo 'hello world';
});

$router->route('get', BASE_URI . '/about', function() {
    echo 'about page';
});

$router->route('POST', BASE_URI . '/users/{user}/city/{city}', function($user, $city) {
    echo 'new writing format user ' . $user . ' city = ' . $city; 
});

$router->route('GET', BASE_URI . '/company/(.*)/?', function($companyName){
    // /? means it can has final slash or not;
    echo 'this is company name : ' . $companyName;
});

$router->route('post', BASE_URI . '/users/(.*)/city/(.*)', function($user, $city){
    echo 'this user is from ' . $city . ' and his/her name is ' . $user;
});

// you can use delete or patch or update also

$router->dispatch($action);

?>