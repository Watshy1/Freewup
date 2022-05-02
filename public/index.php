<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new Bramus\Router\Router();

$router->get('/', 'Mvc\Controller\PageController@HomePage');

$router->get('/register', 'Mvc\Controller\PageController@RegisterPage');

$router->get('/login', 'Mvc\Controller\PageController@LoginPage');

$router->get('/author', 'Mvc\Controller\PageController@AuthorPage');

$router->get('/blog', 'Mvc\Controller\PageController@BlogPage');

$router->get('/privateMessage', 'Mvc\Controller\PageController@PrivateMessagePage');

$router->get('/profil', 'Mvc\Controller\PageController@ProfilPage');

$router->run();