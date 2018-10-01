<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
</head>

<style type="text/css">
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  
  
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
    padding-top: 50%;
    
}
}
</style>
<body style=" font-family: 'Titillium Web', sans-serif; width:100%; height:100%;">

  <a href="../index.php"> <img src="../images/logo.png"  class="logo-image"></a>
  <div class="header" style="margin-top:-6%; ">
  	<h1 style="letter-spacing: 10px;">LOGIN</h1>
  </div>
  <form method="post" action="login.php" >
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="name" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="xyz">
  		Not yet a member?<br> <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>