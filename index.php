<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<a href="http://zadanie161120/acu.php">acu</a>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->

		<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");											
		$query = mysqli_query($connect, "SELECT * FROM posts");	
		
		for ($i=0; $i < 3; $i++) { 
			$result1 = $query->fetch_assoc();	

		?>
		<div class="col-4">
			<div class="col-12" style="background-image: url(<?php echo $result1['img']; ?>); height: 360px;background-size: 100% 100%">

			</div>
			<div>

				<?php 
					echo "<h1>" . $result1["title"] . "</h1>";
					echo "<p>" . $result1["description"] . "</p>";
					echo "<p>" . "$" . $result1["goal"] . "</p>";
					echo "<p>" . "$" . $result1["donated"] . "</p>";
					


				?>
				<form action="update.php" method="GET">    	
				<input type="" name="" value="<?php echo $result1["id"]?>">		        
			        <button>donated $10</button>
			    </form> 
			</div>			
		</div>
			
			<?php
			}	
			?>
	</div>

</div>

</body>
</html>