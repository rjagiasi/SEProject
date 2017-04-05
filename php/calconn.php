<?php

include ("functions.php");


if(isset($_POST['calendar']))
	setcookie('calendar', $_POST['calendar'], time() + 86400, "/");

$result = query("INSERT INTO user_data VALUES 
('".$_COOKIE["userid"]."','".$_COOKIE["name"]."','".$_COOKIE["calendar"]."','".$_COOKIE["percentage"]."','".$_COOKIE["branch"]."') ");
header('Location: interest.php');

?>