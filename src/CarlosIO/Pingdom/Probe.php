<?php
namespace CarlosIO\Pingdom;

class Probe extends \CarlosIO\Pingdom\Object
{
    public function getId()
    {
        return $this->_getProperty('id');
    }

    public function getCountry()
    {
        return $this->_getProperty('country');
    }

    public function getCity()
    {
        return $this->_getProperty('city');
    }

    public function getName()
    {
        return $this->_getProperty('name');
    }

    public function getActive()
    {
        return $this->_getProperty('active');
    }

    public function getHostname()
    {
        return $this->_getProperty('hostname');
    }

    public function getIp()
    {
        return $this->_getProperty('ip');
    }

    public function getCountryIso()
    {
        return $this->_getProperty('countryiso');
    }
}