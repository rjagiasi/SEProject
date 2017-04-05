<?php
if(isset($_POST['name']))
	setcookie('name', $_POST['name'], time() + 86400, "/");

header('Location: stry.php');


?>