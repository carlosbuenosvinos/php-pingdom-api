CarlosIO\Pingdom
================

[![Build Status](https://secure.travis-ci.org/carlosbuenosvinos/php-pingdom-api.png?branch=master)](http://travis-ci.org/carlosbuenosvinos/php-pingdom-api)

CarlosIO\Pingdom is a Pingdom API written in PHP
with multiaccount support. So, if you don't want
to pay for a premium account, you can create free
ones and integrate them using this API.

Features
========
All the Pingdom services are available at http://www.pingdom.com/services/api-documentation-rest

Here are the services you can use using this API:
* Check
  * /api/{version}/checks

Requiring in another project
============================
Using composer:

```
    "require": {
        "carlosio/pingdom": "1.*"
    }
```

Usage
=====
Usage is fairly straightforward. Here is an example:

```php
<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use CarlosIO\Pingdom\Account;
    use CarlosIO\Pingdom\Client;

    $client = new Client();
    $client->addAccount(new Account('<user>', '<password>', '<token>'));
    $checks = $client->getChecks();

    // As an example...
    foreach ($checks as /** @var \CarlosIO\Pingdom\Check $check */ $check) {
        echo $check->getName(), ' (', $check->getHostname(), ')', PHP_EOL, $check->getStatus(), ' ', $check->getLastResponseTime(), PHP_EOL;
    }
```