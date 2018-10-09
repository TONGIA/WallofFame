<?php
	if(isset($_POST['cart'])){
		// echo 'here';
		session_start();
		$cartArray = $_SESSION['cartArray'];
		for($i=0;$i<sizeof($cartArray);$i++){
			echo $cartArray[$i];
		}
	}
?>