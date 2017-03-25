<?php
	require 'functions.php';

	setcookie("slot_id", 0, time()-1, "/");
	setcookie("pay_key", 0, time()-1, "/");

	render("cancelled.php");
?>