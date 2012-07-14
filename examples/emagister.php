<?php
require_once __DIR__ . '/../vendor/autoload.php';

use CarlosIO\Pingdom;

$api = new CarlosIO\Pingdom\Pingdom('php@emagister.com', 'emagist3r', 'ociilto5skp7acx7h0ijhvu7gbpao6kw');
$checks = $api->getChecks();

foreach ($checks as $check) {
    print $check->getName() . " is " . $check->getStatus() . PHP_EOL;
}