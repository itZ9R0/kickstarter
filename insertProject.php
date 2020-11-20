<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");											
	$query = mysqli_query($connect, "INSERT INTO posts ( title, description, goal, donated, img, user, place) VALUES ('".$_GET['title']."', ' ".$_GET['description']."', ' ".$_GET['goal']."' , ' ".$_GET['donated']."', ' ".$_GET['img']."', ' ".$_GET['user']."', ' ".$_GET['place']."')");	
	header("location:acu.php");
 ?>
