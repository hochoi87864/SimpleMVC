<?php

// Project root path
define('APP_ROOT', __DIR__  . '/../');

require __DIR__.'/../vendor/autoload.php';


$app  = require_once __DIR__.'/../bootstrap/app.php';
$app->run();

