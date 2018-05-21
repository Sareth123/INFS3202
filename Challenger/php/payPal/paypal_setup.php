<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

session_start();

$user_id=$_SESSION['user_id'];
require __DIR__ .'/vendor/autoload.php';

//API
$api = new ApiContext(
	new OAuthTokenCredential(
		'ATiPNp2lMFqJrk9e87W_-TYwqt505Nqyyl5NIpneyOnOnNDfHhqD4ZADfg27knv9zDBr4n7qD0Z2WWi2',
		'EKoCddYPSWMhin3Ye_uzO6-EOBDbrfT6xKl6LLiuUMDtANRK44QhxeHC4m_HoxnnCBmb1Hw_8C0OuVD8'
	)

);
$api->setConfig([
	"mode" =>  'sandbox',
	'http.ConnectionTimeOut'=>30,
	'log.LogEnabled' => false,
	'log.FileName' => ' ',
	'log.LogLevel' => 'FINE',
	'validation.level' => 'log'
]);
?>