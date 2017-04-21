<?php
session_start();

setcookie('user', "" , time()-3600, '/');
setcookie('name', "" , time()-3600, '/');
setcookie('emailid', "" , time()-3600, '/');
setcookie('first', "" , time()-3600, '/');
setcookie('role', "" , time()-3600, '/');
session_unset();
session_destroy();

header('location: login.php');

?>