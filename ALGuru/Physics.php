
<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/tab.css">
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
                <!--display date and time-->
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
		
	<div class="container" style="padding:30px; background-image: url(images/back6.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;">
	<div class="row mb-3">
        <!-- heading -->
        <h2 class="text-center">Upcoming Lessons</h2>
        
    </div>
	<div class="row">
        
    
		<div class="col-sm-9">
            <!-- check for the user login-->
		   <?php include 'connection.php';?>
            

	   </div>
        <div class="col-sm-3">
        </div>
	
	</div>
	</div>
        
    <!-- footer -->
	<div class=" text-center" style="background-color:#212529;color:#ffffff;padding:20px 0;">
		<p>Copyright © 2020 ALGuru T&amp;P</p>
	</div>
 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	
 </body>
    
    
</html>





