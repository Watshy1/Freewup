<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new Bramus\Router\Router();

$router->get('/', 'Freewup\Controller\UserController@show');

$router->get('/register', function() {
    echo "Page d'inscription";
});

$router->get('/login', function() {
    echo "Page de connexion";
});

$router->get('/author', function() {
    echo "Page Auteur";
});

$router->get('/blog', function() {
    echo "Page blog";
});

$router->get('/privateMessage', function() {
    echo "Page de message privé";
});

$router->get('/profil', function() {
    echo "Page profil";
});

$router->run();