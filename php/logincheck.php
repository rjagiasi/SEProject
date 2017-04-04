<?php

session_start();

require 'functions.php';

$email = $_POST['email'];
$password = $_POST['pwd'];

$usertab = query( "select * from user where email_id = '$email' and password = '$password'");
$coun = query("select * from counsellor where email_id = '$email' and password = '$password'");

//print_r($usertab);

//echo $usertab;

// foreach ($usertab as $key => $value) {
//     echo $value['Name'];
// setcookie('name', $value['Name'], time()+(86400*10), '/');

// }
if ($usertab!=null){
    
        header('location: index.php');
        foreach ($usertab as $key => $row) {
            // print_r($row['user_id']);
    setcookie('user', $row['User_id'], time()+(86400*10), '/');
    setcookie('name', $row['Name'], time()+(86400*10), '/');
    setcookie('emailid', $email, time()+(86400*10), '/');
    }
}
elseif ($coun!=null) {
    foreach ($coun as $key => $row) {
    setcookie('user', $row['User_id'], time()+(86400*10), '/');
    setcookie('name', $row['Name'], time()+(86400*10), '/');
    setcookie('emailid', $email, time()+(86400*10), '/');
    }
    header('location: counselor_login_page.php');
}
elseif($email==ADMIN_EMAIL and $password==ADMIN_PASSWORD){
    // setcookie('userid', $row['user_id'], time()+(86400+10), '/');
    setcookie('name', 'admin', time()+(86400*10), '/');
    setcookie('emailid', $email, time()+(86400*10), '/');
        header('location: admin_login_page.php');   
}
else {
    header('location: login.php');
    $_SESSION['Error'] = "Incorrect Username/Password";
}

?>