<h3 class="text-info">Please enter your details:</h3>
<form method="post" action="streamconn.php">
<br><br>

<div class="text-info">Please enter your percentage:
<input type="text" name="percentage" placeholder="%"></div>


<div class="dropdown">
  <select name="branch">
  <?php
	$result = query("Select * from branches");
	
	//print_r($result);
	foreach ($result as $values) {
    // $arr[3] will be updated with each value from $arr...
  echo "<option value=".$values["Branch_id"].">".$values["Name"]."</option>";
    
}
  ?>
    
  </select>
  <br><br>
  <br><br>
 <input type="Submit" value="Submit" class="btn btn-primary"  > 
 <a href="home.php" class="btn btn-primary">Home</a> 
  <br><br>
  
  
</div>

</form>