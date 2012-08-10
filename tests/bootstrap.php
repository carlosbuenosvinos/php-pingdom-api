<?php
define('STUB_PATH', __DIR__ . '/stubs');

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('CarlosIO\Pingdom\Tests', __DIR__);