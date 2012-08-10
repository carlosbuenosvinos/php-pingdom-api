<?php
namespace CarlosIO\Pingdom;

class Client
{
    /**
     * @var array Pingdom accounts to track
     */
    private $_accounts;

    public function __construct()
    {
        $this->removeAllAccounts();
    }

    /**
     * Returns all accounts tracked
     *
     * @return array<\CarlosIO\Pingdom\Account> All the accounts
     */
    public function getAccounts()
    {
        return $this->_accounts;
    }

    /**
     * Adds an specific account
     *
     * @param Account $account
     */
    public function addAccount(\CarlosIO\Pingdom\Account $account)
    {
        $this->_accounts[$this->_generateAccountKey($account)] = $account;
    }

    /**
     * Sets just an specific account
     *
     * @param Account $account
     */
    public function setAccount(\CarlosIO\Pingdom\Account $account)
    {
        $this->removeAllAccounts();
        $this->addAccount($account);
    }

    /**
     * Removes an specific account if exists
     *
     * @param Account $account
     */
    public function removeAccount(\CarlosIO\Pingdom\Account $account)
    {
        $key = $this->_generateAccountKey($account);
        if (isset($this->_accounts[$key])) {
            unset($this->_accounts[$key]);
        }
    }

    /**
     * Removes all the accounts
     */
    public function removeAllAccounts()
    {
        $this->_accounts = array();
    }

    /**
     * Returns a list overview of all checks from all accounts
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Check> All checks
     */
    public function getChecks()
    {
        $items = array();
        foreach ($this->_accounts as /** @var \CarlosIO\Pingdom\Account $account */ $account) {
            $items = array_merge($items, $account->getChecks());
        }

        return $items;
    }

    /**
     * Returns a list overview of all actions from all accounts
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Action> All actions
     */
    public function getActions()
    {
        $items = array();
        foreach ($this->_accounts as /** @var \CarlosIO\Pingdom\Account $account */ $account) {
            $items = array_merge($items, $account->getActions());
        }

        return $items;
    }

    /**
     * Returns a list overview of all contacts from all accounts
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Contact> All contacts
     */
    public function getContacts()
    {
        $items = array();
        foreach ($this->_accounts as /** @var \CarlosIO\Pingdom\Account $account */ $account) {
            $items = array_merge($items, $account->getContacts());
        }

        return $items;
    }

    /**
     * Returns a list overview of all credits from all accounts
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Credit> All credits
     */
    public function getCredits()
    {
        $items = array();
        foreach ($this->_accounts as /** @var \CarlosIO\Pingdom\Account $account */ $account) {
            $items = array_merge($items, $account->getCredits());
        }

        return $items;
    }

    private function _generateAccountKey(\CarlosIO\Pingdom\Account $account)
    {
        return md5(serialize($account));
    }
}