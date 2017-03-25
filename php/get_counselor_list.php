<?php
	session_start();

	require "functions.php";

	$user_id = $_COOKIE["userid"];

	$location_id = query("SELECT Location_id FROM User_data WHERE User_id = ".$user_id)[0]["Location_id"];

	$counsellors = array();

	array_push($counsellors, query("SELECT Counsellor_id, Name, Email_id, Place, Address, Contact_No FROM Locations, Counsellor WHERE Locations.Location_id = Counsellor.Location_id AND Locations.Location_id = ".$location_id));

	array_push($counsellors, query("SELECT Counsellor_id, Name, Email_id, Place, Address, Contact_No FROM Locations, Counsellor WHERE Locations.Location_id = Counsellor.Location_id AND Locations.Location_id != ".$location_id));

	echo json_encode($counsellors);
?>