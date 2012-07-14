<?php
namespace CarlosIO\Pingdom;

class Check
{
    private $_name = null;
    private $_status = null;

    public function __construct($name, $status)
    {
        $this->_name = $name;
        $this->_status = $status;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getStatus()
    {
        return $this->_status;
    }
}