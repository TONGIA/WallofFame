<?php
$name = "";
$email    = "";
$message ="";
$db = mysqli_connect('localhost', 'root', '', 'registration');
$yourName = $db->real_escape_string($_POST['Name']);
$yourEmail = $db->real_escape_string($_POST['Email']);
$message = $db->real_escape_string($_POST['message']);
$sql="INSERT INTO contact_form_info (name, email, message) VALUES ('".$yourName."','".$yourEmail."','".$message."')";
if(!$result = $db->query($sql)){
die('There was an error running the query [' . $db->error . ']');
}
else{

// 	$toEmail = "hasnain.hasnain369@gmail.com";
// $mailHeaders = "From: " . $_POST["Name"] . "<". $_POST["Email"] .">\r\n";
// if(mail($toEmail, $_POST["message"], $mailHeaders)) {

// }
	header('location:index.php');

}

?>