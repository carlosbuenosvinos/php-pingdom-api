<?php
namespace CarlosIO\Pingdom;

use CarlosIO\Pingdom\Check;
use Guzzle\Service\Client;

class Pingdom
{
    private $user;
    private $password;
    private $token;

    public function __construct($user, $password, $token)
    {
        $this->user = $user;
        $this->password = $password;
        $this->token = $token;
    }

    public function getChecks()
    {
        $client = new Client('https://api.pingdom.com/api/2.0');

        $request = $client->get('checks', array('App-Key' => $this->token));
        $request->setAuth($this->user, $this->password);
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