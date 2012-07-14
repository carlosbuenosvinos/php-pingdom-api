CarlosIO\Pingdom
=================
CarlosIO\Pingdom is a Pingdom API written in PHP
for PHP 5.3+. It has been born for Dashboard
and extreme feedback purposes.

Requiring in another project
============================
Using composer:

```
    "require": {
        "carlosio/pingdom": "dev-master"
    }
```

Usage
=====
Usage is fairly straightforward,

```php
<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use CarlosIO\Pingdom;

    $pingdom = new Pingdom('<user>', '<password>', '<token>');
    $checks = $pingdom->getChecks();
    print_r($checks);
```