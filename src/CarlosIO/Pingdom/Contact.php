<?php
namespace CarlosIO\Pingdom;

class Contact extends \CarlosIO\Pingdom\Object
{
    public function getId()
    {
        return $this->_getProperty('id');
    }

    public function getName()
    {
        return $this->_getProperty('name');
    }

    public function getEmail()
    {
        return $this->_getProperty('email');
    }

    public function getCellphone()
    {
        return $this->_getProperty('cellphone');
    }

    public function getCountryIso()
    {
        return $this->_getProperty('countryiso');
    }

    public function getDefaultSmsProvider()
    {
        return $this->_getProperty('defaultsmsprovider');
    }

    public function getDirectTwitter()
    {
        return $this->_getProperty('directtwitter');
    }

    public function getTwitterUser()
    {
        return $this->_getProperty('twitteruser');
    }

    public function getIphoneTokens()
    {
        return $this->_getProperty('iphonetokens');
    }

    public function getAndroidTokens()
    {
        return $this->_getProperty('androidtokens');
    }

    public function getPaused()
    {
        return $this->_getProperty('paused');
    }
}