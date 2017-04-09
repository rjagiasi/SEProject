<?php
include ("functions.php");

  print_r($_POST);
query("INSERT INTO counsellor
	(Name, Email_id, Location_id, Address, Google_id, Contact_No,PayPal_Email_id)
	VALUES ('".$_POST["Cname"]."',
	'".$_POST["Cemail"]."',
	'".$_POST["name"]."',
	'".$_POST["Caddress"]."',
	'".$_POST["Cemail"]."',
	'".$_POST["Cnumber"]."',
	'".$_POST["Cemail_p"]."')");
	echo "New Counsellor added successfully";
?>