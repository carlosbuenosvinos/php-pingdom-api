<?php
namespace CarlosIO\Pingdom;

class Credit extends \CarlosIO\Pingdom\Object
{
    public function getAutoFillSms()
    {
        return $this->_getProperty('autofillsms');
    }

    public function getAvailableChecks()
    {
        return $this->_getProperty('availablechecks');
    }

    public function getAvailableSms()
    {
        return $this->_getProperty('availablesms');
    }

    public function getAvailableSmsTests()
    {
        return $this->_getProperty('availablesmstests');
    }

    public function getCheckLimit()
    {
        return $this->_getProperty('checklimit');
    }
}