<?php
namespace CarlosIO\Pingdom;

class Check
{
    private $_name;
    private $_status;
    private $_account;

    public function __construct($name, $status, \CarlosIO\Pingdom\Account $account)
    {
        $this->_name = $name;
        $this->_status = $status;
        $this->_account = $account;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getStatus()
    {
        return $this->_status;
    }

    public function getAccount()
    {
        return $this->_account;
    }
}