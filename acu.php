<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://zadanie161120/index.php">1index</a>
		<form action="insertProject.php" method="GET">
				
			<input type="" name="title" placeholder="title">		
			<input type="" name="description" placeholder="description">		
			<input type="" name="goal" placeholder=" goal">
			<input type="" name="donated" placeholder=" donated">

			<input type="" name="img" placeholder=" img">
			<input type="" name="user" placeholder="user"> 
			<input type="" name="place" placeholder="place"> 
			<button>SET</button>
		</form>

 <?php 
 	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");											
	$query = mysqli_query($connect, "SELECT * FROM posts");	
	
	for ($i=0; $i < 3; $i++) { 
		$result1 = $query->fetch_assoc();
 ?>
 			<?php 
					echo "<h1>" . $result1["title"] . "</h1>";
			?>
 			<img style="height: 300px;width: 450px" src="<?php echo $result1['img']; ?>">
 				<?php 
					
					echo "<p>" . $result1["description"] . "</p>";
					echo "<p>" . "$" . $result1["goal"] . "</p>";
					echo "<p>" . "$" . $result1["donated"] . "</p>";
				?>
				  	
				
			</div>			
		</div>





 <?php
   }	
 ?>








</body>
</html>