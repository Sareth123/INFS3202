<?php
use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConnectionException;



require 'paypal_setup.php';
include('../connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");


$payer = new Payer();
$details = new Details();
$amount = new Amount();
$transaction = new Transaction();
$payment = new Payment();
$redirectUrls = new RedirectUrls();

//Payer
	$payer->setPaymentMethod('paypal');

//Details
	$details-> setShipping('0.00')
		->setTax('0.00')
		->setSubtotal('10.00');

//Amount
	$amount ->setCurrency('AUD')
		->setTotal('10.00')
		->setDetails($details);

//Transaction
	$transaction->setAmount($amount)
		->setDescription('Donate');

//Payment
	$payment ->setIntent('sale')
		->setPayer($payer)
		->setTransactions([$transaction]);


//Redirect Urls change if I want
$redirectUrls->setReturnUrl('http://localhost/challenge/Challenger/php/payPal/pay.php?approved=true')
	->setCancelUrl('http://localhost/challenge/Challenger/php/payPal/pay.php?approved=false');
	//change cancelled

$payment->setRedirectUrls($redirectUrls);

try {


	$payment->create($api);

	//Generate and store hash (for DB)
	$hash = md5($payment->getId());
	$_SESSION['paypal_hash'] = $hash;
	$payment_id=$payment->getId();
	//Prepare and execute transaction storage
	mysqli_query($db->link,
		"INSERT INTO transactions(user_id, payment_id, hash, complete)
		VALUES ('$user_id','$payment_id', '$hash', 0)
	");




} catch(PPConnectionException $e) {
	header('Location:paypal/error.php');

}

foreach($payment->getLinks() as $link){
	if($link->getRel() == 'approval_url'){
		$redirectUrl = $link->getHref();
	}
}
header("Location: ".$redirectUrl);