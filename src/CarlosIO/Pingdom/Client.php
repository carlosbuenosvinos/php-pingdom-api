<?php
namespace CarlosIO\Pingdom;

use CarlosIO\Pingdom\Check;

class Client
{
    const URL_REST = 'https://api.pingdom.com/api/2.0';

    /**
     * @var string Account username
     */
    private $username;

    /**
     * @var string Account password
     */
    private $password;

    /**
     * @var string Account API token (32 chars)
     */
    private $token;

    /**
     * Builds a Pingdom Client
     *
     * @param string $username
     * @param string $password
     * @param string $token
     */
    public function __construct($username, $password, $token)
    {
        $this->username = $username;
        $this->password = $password;
        $this->token = $token;
    }

    /**
     * Returns username account
     *
     * @return string Username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns password account
     *
     * @return string Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns token account
     *
     * @return string Token (32 chars)
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets username account
     *
     * @param string username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Sets password account
     *
     * @param string password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Sets token account
     *
     * @param string Token (32 chars)
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Returns a list overview of all checks
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Checks> All checks
     */
    public function getChecks()
    {
        $client = new \Guzzle\Service\Client(static::URL_REST);

        /** @var $request \Guzzle\Http\Message\Request */
        $request = $client->get('checks', array('App-Key' => $this->token));
        $request->setAuth($this->username, $this->password);
        $response = $request->send();

        // Execute the request and decode the json result into an associative array
        $response = json_decode($response->getBody(), true);

        // Check for errors returned by the API
        if (isset($response['error'])) {
            throw new \Exception("Error: " . $response['error']['errormessage']);
        }

        // Fetch the list of checks from the response
        $checksList = $response['checks'];
        $result = array();

        // Print the names and statuses of all checks in the list
        foreach ($checksList as $check) {
            $result[] = new Check($check['name'], $check['status']);
        }

        return $result;
    }
}