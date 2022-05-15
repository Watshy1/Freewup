<?php

require_once __DIR__ . '/../vendor/autoload.php';

session_start();

$router = new Bramus\Router\Router();

$router->before('GET|POST', '/', function() {
    if (!isset($_SESSION['user'])) {
        header('location: /login');
        exit;
    }
});

$router->before('GET|POST', '/article/(\d+)', function() {
    if (!isset($_SESSION['user'])) {
        header('location: /login');
        exit;
    }
});

$router->before('GET|POST', '/login', function() {
    if (isset($_SESSION['user'])) {
        header('location: /');
        exit;
    }
});

$router->before('GET|POST', '/register', function() {
    if (isset($_SESSION['user'])) {
        header('location: /');
        exit;
    }
});

$router->before('GET|POST', '/article/', function() {
    header('location: /');
    exit;
});

$router->get('/', 'Mvc\Controller\ArticleController@show4lastArticles');

$router->get('/article/(\d+)', 'Mvc\Controller\ArticleController@showArticle');

$router->get('/register', 'Mvc\Controller\PageController@RegisterPage');
$router->post('/register', 'Mvc\Controller\UserController@register');

$router->get('/login', 'Mvc\Controller\PageController@LoginPage');
$router->post('/login', 'Mvc\Controller\UserController@login');

$router->get('/logout', 'Mvc\Controller\UserController@logout');

$router->get('/createArticle', 'Mvc\Controller\ArticleController@createArticle');
$router->post('/createArticle', 'Mvc\Controller\ArticleController@createArticle');

$router->get('/author', 'Mvc\Controller\PageController@AuthorPage');

$router->get('/blog', 'Mvc\Controller\PageController@BlogPage');

$router->get('/privateMessage', 'Mvc\Controller\PageController@PrivateMessagePage');

$router->get('/profil', 'Mvc\Controller\PageController@ProfilPage');

$router->run();