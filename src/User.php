<?php

/**
 * User methods
 * @author Naveen
 */
require_once dirname(__DIR__) . "/vendor/autoload.php";

if (isset($_GET['wsdl'])) {
    $wsdl = new WSDL\WSDLCreator('User', 'http://local.soap.com/src/User.php');
    $wsdl->setNamespace("http://foo.bar/");
    $wsdl->renderWSDL();
    exit;
}

class User {

    /**
     * Constructor
     */
    function __construct() {
        
    }

    /**
     * 
     * @param string $username
     * @param string $password
     * @return array
     */
    public function Login($username, $password) {
        
    }

}
