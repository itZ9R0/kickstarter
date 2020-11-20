<?php
		$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
		$query = mysqli_query($con, "SELECT * FROM posts WHERE id = {$_GET['id']}");
		$don = $query->fetch_assoc();
		$up = $don["donated"] + 100;
 		mysqli_query($con, "UPDATE posts SET donated ='{$up["up"]}'  WHERE id = '{$_GET["id"]}'");
		header("location:index.php");	
?>