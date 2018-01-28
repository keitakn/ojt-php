<?php
require __DIR__ . '/../vendor/autoload.php';

// テンプレートエンジンを生成する
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader);

// Register routes
require __DIR__ . '/../app/routes.php';
