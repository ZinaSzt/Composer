<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Hello;

$Hello = new Hello();
echo $Hello->talk();