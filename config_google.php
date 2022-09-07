<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google\Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('339916949344-8rvb2bu6kr0v17t5k2g20gadgqh0valq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Tours%20And%20Travel%20Website/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
