<?php

$router = new AltoRouter();
$router->setBasePath(APP_NAME);

$router->map('GET|POST', '/', array('c' => 'ControleurHome', 'a' => 'actionIndex'), 'home_index');

$router->map('GET', '/qui-sommes-nous', array('c' => 'ControleurHome', 'a' => 'actionNous'), 'home_nous');
$router->map('GET', '/services', array('c' => 'ControleurHome', 'a' => 'actionService'), 'home_service');
$router->map('GET', '/contact', array('c' => 'ControleurHome', 'a' => 'actionContact'), 'home_con');

$router->map('GET|POST', '/login', array('c' => 'ControleurUser', 'a' => 'actionLogin'), 'user_login');
$router->map('GET|POST', '/logout', array('c' => 'ControleurUser', 'a' => 'actionLogour'), 'user_logout');
$router->map('GET|POST', '/subscribe', array('c' => 'ControleurUser', 'a' => 'actionSubscribe'), 'user_subscribe');
$router->map('GET|POST', '/confirm', array('c' => 'ControleurUser', 'a' => 'actionConfirm'), 'user_confirm');

$router->map('GET|POST', '/private', array('c' => 'ControleurPrivate', 'a' => 'actionIndex'), 'private_home');
