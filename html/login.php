<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="652807989103-m7m0fobg3qba9pd96vbep81t9apdfmj5.apps.googleusercontent.com">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        // var profile = googleUser.getBasicProfile();
        // console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        // console.log('Full Name: ' + profile.getName());
        // console.log('Given Name: ' + profile.getGivenName());
        // console.log('Family Name: ' + profile.getFamilyName());
        // console.log("Image URL: " + profile.getImageUrl());
        // console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        // var xhr = new XMLHttpRequest();
        var id_token = googleUser.getAuthResponse().id_token;
        window.location = "google.php?idtoken="+id_token;
    //     console.log("ID Token: " + id_token);
      
    // xhr.open('POST', 'google.php');
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // xhr.send('idtoken=' + id_token);
    // xhr.onload = function() {
    //   console.log('Signed in as: ' + xhr.responseText);
    // };

      };
</script>

</head>
<body>

<div id="cont">

<ul class="nav nav-tabs">
  <li class="log active"><a data-toggle="tab" href="#login">Login</a></li>
  <li class="log"><a data-toggle="tab" href="#Signup">Signup</a></li>
</ul>

<div class="tab-content">
  <div id="login" class="tab-pane fade in active">
   
   <form action="../php/logincheck.php" method="POST">
	<div class="al">
 
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" required>
  </div>	
 
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" required>
  </div>
 
  <div class="checkbox">
    <label><input type="checkbox" name="rememberme"> Remember me</label>
  </div>

  <div><p style="color: red;">
    <?php 
    if( isset($_SESSION['Error']) )
    {
        echo $_SESSION['Error'];

        unset($_SESSION['Error']);

    }  ?></p></div>

  <button type="submit" class="btn btn-default">Login</button>
	<br>
	<br>
	</div>  

	</form>
  <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
  

  </div>

  <div id="Signup" class="tab-pane fade">
	<form action="../php/signup.php" method="POST"> 
	<div class="al">
		<div class="form-group">
    		<label for="name">Name:</label>
			<input type="name" class="form-control" name="name" required>
		</div>
		<div class="form-group">
    		<label for="email">Email address:</label>
    		<input type="email" class="form-control" name="email" required>
  		</div>
  		<div class="form-group">
 		   <label for="pwd">Password:</label>
    		<input type="password" class="form-control" name="pwd" required>
  		</div>
		<br>
		<button type="submit" class="btn btn-default">Signup</button>
	</div>
	</form>

</div>

</div>

</body>
</html>