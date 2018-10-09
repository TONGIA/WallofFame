<?php
	if(isset($_POST['add'])){
		//echo 'here';
		//echo $_POST['selected_product'];
		session_start();
		$cartArray = $_SESSION['cartArray'];
		$div = $_SESSION['selected_div'];
		for($i=0;$i<sizeof($cartArray);$i++){
			echo $cartArray[$i];
		}
		echo "</br>";
		array_push($cartArray,$_POST['selected_product']);
		$_SESSION['cartArray'] = $cartArray;
		$cartArray = $_SESSION['cartArray'];
		for($i=0;$i<sizeof($cartArray);$i++){
			echo $cartArray[$i];
		}
		header("Location:index.php?isTrue=".$_POST['selected_div']);
	}
?>