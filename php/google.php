<?php 
require 'functions.php';

$idtoken = $_GET["idtoken"];
//print_r($idtoken);
$url = "https://www.googleapis.com/oauth2/v3/tokeninfo?id_token=".$idtoken;
$head = file_get_contents($url);
//var_dump($head);

$json = json_decode($head, true);
$name = $json['name'];
$email = $json['email'];
$id = $json['sub'];
// var_dump($name);
$sel = query( "select * from user where email_id = '$email' and google_id = '$id'");
$goo = query("select google_id from user where email_id = '$email'");

foreach ($goo as $key => $value) {
$goog = $value['google_id'];
if($goog!=null){

if($sel==null){
	$ins = query("insert into user(Google_id, Name, Email_id) values ('$id', '$name', '$email')");
	$sel1 = query( "select * from user where email_id = '$email' and google_id = '$id'");
	foreach ($sel1 as $key => $row) {
	setcookie('user', $row['User_id'], time()+(86400*10), '/');
	setcookie('name', $row['Name'], time()+(86400*10), '/');
	setcookie('emailid', $row['Email_id'], time()+(86400*10), '/');
	setcookie('first', true, time()+(86400*10), '/');
	}
	header('Location: details_page.php');
}
else{
	header('Location: index.php');
	foreach ($sel as $key => $row) {
	setcookie('user', $row['User_id'], time()+(86400+10), '/');
	setcookie('name', $row['Name'], time()+(86400+10), '/');
	setcookie('emailid', $email, time()+(86400+10), '/');
	$det = query("Select * from user_data where user_id = ".$row['User_id']);
            if($det==null){
                setcookie('first', true, time()+(86400+10), '/');
                header('location: details_page.php');
            }
	}
}

}
else{
	setcookie('GError', 'Please login with correct username password', time()+(30), '/');
	header('location: login.php');
	 
}
}
?>