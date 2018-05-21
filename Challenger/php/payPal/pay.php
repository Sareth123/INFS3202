<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'paypal_setup.php';
	include('../connect.php');
	$db = new MySQLDatabase();
	$db->connect("challenger");

//easiet way maybe fix
if(isset($_GET['approved'])) {
	$approved = $_GET['approved'] ==="true";

	if($approved){

		$payerID = $_GET['PayerID'];

		//Get payment_id from DB
		$h=$_SESSION['paypal_hash'];
		$paymentID = mysqli_query($db->link,"
			SELECT payment_id
			FROM transactions
			WHERE hash= '$h'
			");


		$paymentID = $paymentID->fetch_object()->payment_id;
		$payment = Payment::get($paymentID, $api);

		$execution = new PaymentExecution();
		$execution ->setPayerId($payerID);
		// Execute PayPal payment charge
		$payment->execute($execution, $api);

		//Update Transaction
		mysqli_query($db->link,"
			UPDATE transactions
			SET complete= 1
			WHERE payment_id='$paymentID'");

		mysqli_query($db->link,"
			UPDATE users
			SET donate =1
			WHERE user_id='$user_id'");
		header('Location:../../home.php');


	}else{
		
		header('Location: ../../home.php');
	}
}

?>