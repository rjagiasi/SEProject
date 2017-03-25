<?php

require 'functions.php';

setcookie("pay_key", -1, time()-1, "/");
setcookie("slot_id", -1, time()-1, "/");

$slot_id = $_POST["slot_id"];
$check = query("SELECT Avail_Booked, PayPal_Email_id from Timeslots, Counsellor	Where Timeslots.Counsellor_id = Counsellor.Counsellor_id and Slot_id = ". $slot_id);


if($check[0]["Avail_Booked"] == 0){
	setcookie("slot_id", 1, time()+900, "/");
}
else
	header("Location : cancel.php");

$curl_request = curl_init();

$url = "https://svcs.sandbox.paypal.com/AdaptivePayments/Pay"; 
curl_setopt($curl_request, CURLOPT_URL,$url); 

$headers = array(
	"Content-type:text/plain",
	"X-PAYPAL-SECURITY-USERID:rohan.jagiasi-admin_api2.ves.ac.in",
	"X-PAYPAL-SECURITY-PASSWORD:CTHEA2RMWTCQDQXE",
	"X-PAYPAL-SECURITY-SIGNATURE:AFcWxV21C7fd0v3bYYYRCpSSRl31A0Fqcyb3EBYoNJ9f-dR8DMC6IAzH",
	"X-PAYPAL-REQUEST-DATA-FORMAT:NV",
	"X-PAYPAL-RESPONSE-DATA-FORMAT:JSON",
	"X-PAYPAL-APPLICATION-ID:APP-80W284485P519543T"
	); 

$amount = 100;

$data = array(
	"actionType"=>"CREATE",
	"clientDetails.applicationId"=>"APP-80W284485P519543T",
	"clientDetails.ipAddress"=>"localhost",
	"currencyCode"=>"USD",
	"feesPayer"=>"SECONDARYONLY",
	"memo"=>"Counselling Session",
	"receiverList.receiver(0).amount"=>$amount,
	"receiverList.receiver(0).email"=>"rohan.jagiasi-admin@ves.ac.in",
	"receiverList.receiver(0).primary"=>"true",
	"receiverList.receiver(1).amount"=>(0.8*$amount),
	"receiverList.receiver(1).email"=>"rohan.jagiasi-counselor@ves.ac.in",
	"receiverList.receiver(1).primary"=>"false",
	"requestEnvelope.errorLanguage"=>"en_US",
	"returnUrl"=>"http://localhost/SEProject/php/success.php",
	"cancelUrl"=>"http://localhost/SEProject/php/cancel.php");

curl_setopt($curl_request, CURLOPT_HTTPHEADER, $headers); 
curl_setopt($curl_request, CURLOPT_POST, 1); 
curl_setopt($curl_request, CURLOPT_POSTFIELDS, http_build_query($data)); 
curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);

$data = json_decode(curl_exec($curl_request), true);
// print_r($data);
setcookie("pay_key", $data["payKey"], time()+900, "/");

sleep(5);

header("Location: https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_ap-payment&paykey=" . $_COOKIE["pay_key"]);

?>