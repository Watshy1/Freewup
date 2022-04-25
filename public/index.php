<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new Bramus\Router\Router();

$router->get('/', function() {
    echo "coucou je suis la";
});

$router->get('/ff', function() {
    echo "ahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
});


$router->get('/home', 'Freewup\Controller\UserController@show');

$router->run();