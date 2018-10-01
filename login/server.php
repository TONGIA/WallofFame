<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  // echo($email);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($number)) { array_push($errors, "Mobile No. is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customers WHERE name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
  	// echo($email);
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
echo(count($errors));
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	echo($email);
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customers (name, email, password,phone,address) 
  			  VALUES('$username', '$email', '$password','$number','$address')";
  	$result1 = mysqli_query($db, $query);
  	echo($query);
  	if(!$result1)
  		array_push($errors, "Error creating your account");
  	else{
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }
  }
}


// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	echo($username);
    $password = md5($password);
    $query = "SELECT * FROM customers WHERE name='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['name'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

if(isset($_POST['logout']))
{
  session_destroy();
  header('location: ../index.php');
}

?>