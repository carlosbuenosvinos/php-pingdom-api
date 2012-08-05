<?php
require_once __DIR__ . '/../vendor/autoload.php';

use CarlosIO\Pingdom;

$api = new CarlosIO\Pingdom\Pingdom('<email>', '<password>', '<token>');
$checks = $api->getChecks();

foreach ($checks as $check) {
    print $check->getName() . " is " . $check->getStatus() . PHP_EOL;
}