<?php
if(isset($_POST['percentage']))
	setcookie('percentage', $_POST['percentage'], time() + 86400, "/");

if(isset($_POST['branch']))
	setcookie('branch', $_POST['branch'], time() + 86400, "/");


	
	header('Location: cal.php');


?>