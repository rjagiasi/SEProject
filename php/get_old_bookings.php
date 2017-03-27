<?php
	require 'functions.php';

	$data = query("
		Select Name, Place, Date, Time
		from Timeslots as t, Locations as l, Counsellor as c, Bookings as b
		Where b.User_id = ".$_COOKIE["userid"]." 
		and b.Slot_id = t.Slot_id 
		and t.Counsellor_id = c.Counsellor_id
		and c.Location_id = l.Location_id
		");

	echo json_encode($data);
?>