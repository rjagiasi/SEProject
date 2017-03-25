<?php
	session_start();

	require("functions.php");

	// print_r($_POST);
	$timeslots = query("SELECT Date, Time, Slot_id FROM Timeslots WHERE Counsellor_id = ".$_POST["counselor_id"]." AND Date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 2 MONTH) AND Avail_booked = 0 ORDER BY Date, Time");

	$formatted_array = array();



	foreach ($timeslots as $key => $timeslot) {
		$date = strtotime($timeslot["Date"]);
		$time = strtotime($timeslot["Time"]);

		$time_string = date("H", $time).":".date("i", $time);

		$formatted_array[date("M", $date)][date("d", $date)][$timeslot["Slot_id"]] = $time_string;
	}

	// print_r($formatted_array);
	echo json_encode($formatted_array);
?>