<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Environnement de test
require __DIR__ . '/classes/Cors.php';
require __DIR__ . '/classes/ContainerDI.php';
require __DIR__ . '/vendor/autoload.php';


$c = new ContainerDI();
// ssd($c);
$c->get("Routing")->dispatch(
    $c->get('Routing')->dispatcher(),
    $c->get('Routing')->httpMethod,
    $c->get('Routing')->uri);




