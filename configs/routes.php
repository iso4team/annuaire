<?php

$router = new AltoRouter();
$router->setBasePath(APP_NAME);

$router->map('GET', '/', array('c' => 'ControleurHome', 'a' => 'actionIndex'), 'home_index');

$router->map('GET', '/products', array('c' => 'ControleurProduct', 'a' => 'actionIndex'), 'product_index');
$router->map('GET|POST', '/products/add', array('c' => 'ControleurProduct', 'a' => 'actionAddProduct'), 'product_add');

$router->map('GET', '/customers', array('c' => 'ControleurCustomer', 'a' => 'actionIndex'), 'customer_index');
$router->map('GET|POST', '/customers/add', array('c' => 'ControleurCustomer', 'a' => 'actionAddCustomer'), 'customer_add');


$router->map('GET', '/suppliers', array('c' => 'ControleurSupplier', 'a' => 'actionIndex'), 'supplier_index');
$router->map('GET|POST', '/suppliers/add', array('c' => 'ControleurSupplier', 'a' => 'actionAddSupplier'), 'supplier_add');


$router->map('GET', '/orders', array('c' => 'ControleurOrder', 'a' => 'actionIndex'), 'order_index');
$router->map('GET|POST', '/orders/add', array('c' => 'ControleurOrder', 'a' => 'actionAddOrder'), 'order_add');


$router->map('GET', '/deliveries', array('c' => 'ControleurDelivery', 'a' => 'actionIndex'), 'delivery_index');
$router->map('GET|POST', '/deliveries/add', array('c' => 'ControleurDelivery', 'a' => 'actionAddDelivery'), 'delivery_add');