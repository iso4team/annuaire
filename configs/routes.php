<?php

$router = new AltoRouter();
$router->setBasePath(APP_NAME);

$router->map('GET|POST', '/', array('c' => 'ControleurHome', 'a' => 'actionIndex'), 'home_index');

$router->map('GET', '/qui-sommes-nous', array('c' => 'ControleurHome', 'a' => 'actionNous'), 'home_nous');
$router->map('GET', '/services', array('c' => 'ControleurHome', 'a' => 'actionService'), 'home_service');
$router->map('GET', '/contact', array('c' => 'ControleurHome', 'a' => 'actionContact'), 'home_con');

$router->map('GET', '/deliveries', array('c' => 'ControleurDelivery', 'a' => 'actionIndex'), 'delivery_index');
$router->map('GET|POST', '/deliveries/add', array('c' => 'ControleurDelivery', 'a' => 'actionAddDelivery'), 'delivery_add');
$router->map('GET|POST', '/deliveries/delete', array('c' => 'ControleurDelivery', 'a' => 'actionDeleteDelivery'), 'delivery_delete');