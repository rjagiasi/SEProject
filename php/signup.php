<?php
session_start();

 require "functions.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$row = query("Insert into user(name, email_id, password) values ('$name', '$email', '$password')");
$sel = query( "select * from user where email_id = '$email' and password = '$password'");
foreach ($sel as $key => $row) {
setcookie('user', $row['User_id'], time()+(86400+10), '/');
setcookie('name', $row['Name'], time()+(86400+10), '/');
setcookie('emailid', $row['Email_id'], time()+(86400+10), '/');
setcookie('first', true, time()+(86400+10), '/');
	
}

header('location: details_page.php');

?>