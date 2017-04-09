<?php
include("functions.php");

  query("INSERT INTO institutes
  	(Name,Cutoff_percentage, Branch_id, Contact, Website, Address)
  	VALUES
  	('".$_POST["Iname"]."', '".$_POST["cutoff"]."' ,
 	'".$_POST["name"]."' , '".$_POST["Inumber"]."',
 	'".$_POST["Website"]."','". $_POST["Iaddress"]."')
 	");
  
echo "Institute was added successfully";

?>