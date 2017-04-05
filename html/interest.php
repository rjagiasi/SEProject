

<form method="post" action="interestconn.php">
<div class="text-info">
Please enter your interests:<br>
<br><br></div>
</h3>

<div class="dropdown">
  <select name="interest">
  <?php
	$result = query("Select * from interest");
	
	//print_r($result);
	foreach ($result as $values) {
    // $arr[3] will be updated with each value from $arr...
  echo "<option value=".$values["Interest_id"].">".$values["Title"]."</option>";
    
}
  ?>
</select><br>
</div>

<br><br>
 <input type="Submit" value="Submit" class="btn btn-primary"  > 
 <a href="home.php" class="btn btn-primary">Home</a> 
  <br><br>
