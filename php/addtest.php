<?php
include("functions.php");

	query("INSERT INTO questions
		(Type_id, Question, Option1, Option2, Option3, Option4, Correct_Option)
		VALUES
		('".$_POST["name"]."', '".$_POST["Question"]."', '".$_POST["opt1"]."', '".$_POST["opt2"]."', '".$_POST["opt3"]."','".$_POST["opt4"]."', '".$_POST["answer"]."')"); 
	echo "New question added successfully";
?>
