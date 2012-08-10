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
* Actions
  * /api/{version}/actions
* Contacts
  * /api/{version}/contacts
* Credits
  * /api/{version}/credits

Installation
============

The best way to install the library is by using [Composer](http://getcomposer.org). Add the following to `composer.json` in the root of your project:

``` javascript
{
    "require": {
        "carlosio/pingdom": "1.*"
    }
}
```

Then, on the command line:

``` bash
curl -s http://getcomposer.org/installer | php
php composer.phar install
```

Use the generated `vendor/autoload.php` file to autoload the library classes.

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

    // As an example...
    $checks = $client->getChecks();
    foreach ($checks as /** @var \CarlosIO\Pingdom\Check $check */ $check) {
        echo $check->getName(), ' (', $check->getHostname(), ')', PHP_EOL
        echo $check->getStatus(), ' ', $check->getLastResponseTime(), PHP_EOL;
    }

    $actions = $client->getActions();
    foreach ($actions as /** @var \CarlosIO\Pingdom\Action $action */ $action) {
        echo $action->getMessageFull(), ' ', $action->getContactName(), ' ', $action->getVia(), PHP_EOL;
    }

    $contacts = $client->getContacts();
    foreach ($contacts as /** @var \CarlosIO\Pingdom\Contact $contact */ $contact) {
        echo $contact->getName(), ' ', $contact->getEmail(), PHP_EOL;
    }

    $credits = $client->getCredits();
    foreach ($credits as /** @var \CarlosIO\Pingdom\Credit $credit */ $credit) {
        echo $credit->getAvailableChecks(), PHP_EOL;
    }
```