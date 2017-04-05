<!DOCTYPE html>
<html>
<head>
	<title>Career Choices</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	
	#im{
		float: left;
	}
	#headt{
		float: left;
		margin-left:10px;
	}
	.panel-footer{
	  	position: relative;
 		right: 0;
  		bottom: 0;
 		left: 0;
  		padding: 1rem;
  		text-align: center;
	}
	#foot{
		list-style-type: none;
	}
</style>
</head>
<body>
<div class="container-fluid">
<header class="page-header">
	<img src="logo.jpg" class="img-circle" id="im" width="60" height="60">
	<h1 id="headt">Career Choices</h1><br><br><br>
</header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Tests</a></li>
      <li><a href="#">Counsellors</a></li>
      <li><a href="#">Insttitutes</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
    </ul>
  </div>
</nav>
<form action="connssc.php">

<div class="click">
<br><input type="checkbox" id="ssc" onclick="myFunction()">
SSC percentage available<div class="text-info">Please enter your percentage:
<input type="text" name="percentage" placeholder="%"></div></div>



<div id="s">
<br><br><br>
11<sup>th</sup> Stream: 


<div class="dropdown">
  <select name="name">
  <?php
	$result = query("Select * from locations");
	
	//print_r($result);
	foreach ($result as $values) {
    // $arr[3] will be updated with each value from $arr...
  echo "<option value=".$values["Location_id"].">".$values["Place"]."</option>";
    
}
  ?>
    
    
  </select>







  
</div>
</div>

<script>
var drop = document.getElementById("sssc");
	var clickBtn = document.getElementsByClassName('click')[0];

drop.disabled = true;

clickBtn.addEventListener('click', function(event) {
    drop.disabled = !drop.disabled;
});


drrop.disabled = true;
</script>



<br><br> <input type="Submit" value="Submit" class="btn btn-primary"  > 
 <a href="home.php" class="btn btn-primary">Home</a> 
</form>  <br><br>











<footer class="panel-footer">
<ul id="foot">
<li><h3>Career Choices</h3></li>
<li><p><strong>Address:</strong> 495/497, Hashu Advani Memorial Complex, Collectors Colony, Chembur, Mumbai, Maharashtra 400074</p></li>
<li><p><strong>Phone:</strong> 022 6789 3000</p></li>
<li><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2017. All Rights Reserved</li>
</ul>
</footer>

</div>
</body>
</html>