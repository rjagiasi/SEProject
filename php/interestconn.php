<?php

include ("functions.php");

if(isset($_POST['interest']))
	setcookie('interest', $_POST['interest'], time() + 86400, "/");


	
$result = query("INSERT INTO user_interests VALUES 
('".$_COOKIE["userid"]."','".$_COOKIE["interest"]."') ");

header("Location: test_page.php");

?>