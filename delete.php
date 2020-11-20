<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");											
	 mysqli_query($connect, "DELETE FROM contacts WHERE id = '{$_GET["id"]}' ");	
	header("location:acu.php");
 ?>