<?php

          require __DIR__ . "/vendor/autoload.php";
$router = require __DIR__ ."/router.php";

$object = $router->handler();
/*
$class  = new $object["class"](new App\Models\Users);
$action = $object["action"];

echo $class->$action();
*/



$resolver = new SON\Resolver();
$resolver->handler($object["class"],$object["action"]);


