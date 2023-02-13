<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Router\Route;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require_once 'vendor/autoload.php';

// Подключение twig
$loader = new FilesystemLoader('Views');
$view = new Environment($loader);

// Роутер
$route = new Route;

// Главная страница
$route->addRoute('/newBlog/', function () use ($view) {
    echo $view->render('home.twig');
});

// Страница регистрации
$route->addRoute('/newBlog/signup', function () use ($view) {
    echo $view->render('signup.twig');
});

// Страница 404
$route->addRoute('404', function () use ($view) {
    echo $view->render('404.twig');
});

$route->dispatch();

?>