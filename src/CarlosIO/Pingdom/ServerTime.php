<?php
namespace CarlosIO\Pingdom;

class ServerTime extends \CarlosIO\Pingdom\Object
{
    public function getServerTime()
    {
        return $this->_getProperty('servertime');
    }
}