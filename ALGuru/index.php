<!doctype html>
<html lang="en">
  <head>
   
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
    <title>AL ගුරු</title>
  </head>
  <body style="margin:0 10%;padding:0 10px;">
   
	<div class="jumbotron jumbotron-fluid" style="padding-bottom:0px;padding-top:10px;margin-bottom:0px;">
		<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="index.php"><img class="img-fluid" src="images/logoM.png" /></a>
			</div>
			<div class="col-sm-8">
				<h5 class="text-right" 	id="date"></h5>
                <h5 class="text-right" 	id="time"></h5>
                <script>
                var dt = new Date();
                document.getElementById("date").innerHTML = dt.toLocaleDateString();
                document.getElementById("time").innerHTML = dt.toLocaleTimeString();
                </script>
				
			</div>
		</div>	
		</div>
		
		<!-- menu bar-->
		<?php include 'menu.php'; ?>
		
	<div class="container" style="padding:30px; background-image: url(images/12.jpg);background-position: top;background-repeat: no-repeat;background-size: cover;">
	
	<div class="row">
        
    
		<div class="col-sm-6">
        
			<img class="img-fluid text-center" src="images/logoM2.png" />
		
		</div>
        <div class="col-sm-3">
			<a href="Physics.php" class="btn btn-info btn-block" role="button">Physics</a>
			<a href="Chemistry.php" class="btn btn-info btn-block" role="button">Chemistry</a>
			<a href="CombinedM.php" class="btn btn-info btn-block" role="button">Combined Maths</a>
            <a href="Bio.php" class="btn btn-info btn-block" role="button">Biology</a>
			
		</div>
		<div class="col-sm-3">
            <a href="ICT.php" class="btn btn-info btn-block" role="button">ICT</a>
            <a href="GE.php" class="btn btn-info btn-block" role="button">General English</a>
            <a href="GIT.php" class="btn btn-info btn-block" role="button">GIT</a>
		</div>
	</div>
	
	</div>
	</div>
	<div class=" text-center" style="background-color:#212529;color:#ffffff;padding:20px 0;">
		<p>Copyright © 2020 ALGuru T&amp;P</p>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	
 </body>
</html>