<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTER</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<style type="text/css">
form, .content {
  width: 30%;
  margin: 0px auto;
  
  
  
}

.logo-image{
  width: 10%;
  padding: 0px 4px;
  text-align: center;
}

@media screen and (max-width: 460px) {
.logo-image{
  width: 20%;
  padding: 0px 2px;
  text-align: center;
}

form, .content {
    width: 80%;
}
}
</style>
<body style=" font-family: 'Titillium Web', sans-serif; width:100%; height:100%;">

  <a href="../index.php"> <img src="../images/logo.png"  class="logo-image"></a>
  <div class="header" style="margin-top:-7%; ">
  	<h2>REGISTER</h2>
  </div>
	
  <form method="post" action="register.php" style="margin-top: -50px;">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="name">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Mobile No.</label>
  	  <input type="text" name="number">	
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
