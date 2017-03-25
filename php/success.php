<?php
	require 'functions.php';

	query("Insert into Bookings values ('".$_COOKIE["userid"]."', '".$_COOKIE["slot_id"]."' , '".$_COOKIE["pay_key"]. "')");

	query("Update Timeslots set Avail_Booked = '1' where Slot_id = '". $_COOKIE["slot_id"]."'");

	setcookie("pay_key", -1, time()-1, "/");
	setcookie("slot_id", -1, time()-1, "/");

	render("successful.php");
	// header("Location: counselor_page.php");
?>