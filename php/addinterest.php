<?php
include ("functions.php");

query("INSERT INTO interest
	(Title)
	VALUES ('".$_POST["Interest"]."')
	");
	echo "New Interest added successfully";
?>