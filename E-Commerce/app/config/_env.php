<?php

use Dotenv\Dotenv; 
use Dotenv\Store\FileStore;

$path = define("APP_ROOT", realpath(__DIR__ . '/../../'));
$envpath = APP_ROOT. '.env';

require_once APP_ROOT . "/vendor/autoload.php";



$store = new FileStore([APP_ROOT], $path);
$store->$parse($envpath);

$dotEnv = new Dotenv($store);


// $dotEnv->load();
