<?php

session_start();

require_once __DIR__ . '/core/Model.php';
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/errorHandler.php';
require_once __DIR__ . '/helpers/passwordEncryption.php';

require  './controllers/homeController.php';
// Add controller

$router = new Router();

$router->add('/home', 'homeController');
// Add route

$router->submit();
