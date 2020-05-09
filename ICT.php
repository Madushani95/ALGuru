
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
        <h2 class="text-center">Upcoming Lessons</h2>
        
    </div>
	<div class="row">
        
    
		<div class="col-sm-9">
		   <div class="container">
          
         
          <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#l1" role="tab" aria-controls="l1">Lesson 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#l2" role="tab" aria-controls="l2">Lesson 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#l3" role="tab" aria-controls="l3">Lesson 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#l4" role="tab" aria-controls="l4">Lesson 4</a>
          </li>
        </ul>


<div class="tab-content">
          <div class="tab-pane active p-3" id="l1" role="tabpanel">
            <h3>Origin of ICT</h3>
             <ul class="list-group">
              <li class="list-group-item"> 
                   <h5 class="list-group-item-heading">01. Introduction to ICT</h5>
                    <p class="list-group-item-text pl-5">29.04.2020 at 4.00pm on Nanasa TV<br>
                        <button type="button" class="btn btn-outline-info btn-sm">Add to Calander</button>
                  
                    </p>
                   
                  </li> 
              <li class="list-group-item">
                 
                  <h5 class="list-group-item-heading">02. What is ICT</h5>
                    <p class="list-group-item-text pl-5">01.05.2020 at 4.00pm on Nanasa TV<br>
                        <button type="button" class="btn btn-outline-info btn-sm">Add to Calander</button>
                  
                    </p>
                 </li>
              <li class="list-group-item">
                 <h5 class="list-group-item-heading">03. What is it worth?</h5>
                    <p class="list-group-item-text pl-5">03.05.2020 at 4.00pm on Nanasa TV<br>
                        <button type="button" class="btn btn-outline-info btn-sm">Add to Calander</button>
                  
                    </p>
                 </li>
                 <li class="list-group-item">
                 <h5 class="list-group-item-heading">04. ICT history</h5>
                    <p class="list-group-item-text pl-5">05.05.2020 at 4.00pm on Nanasa TV<br>
                        <button type="button" class="btn btn-outline-info btn-sm">Add to Calander</button>
                  
                    </p>
                 </li>
                 <li class="list-group-item">
                 <h5 class="list-group-item-heading">05. ICT lanugages</h5>
                    <p class="list-group-item-text pl-5">07.05.2020 at 4.00pm on Nanasa TV<br>
                        <button type="button" class="btn btn-outline-info btn-sm">Add to Calander</button>
                  
                    </p>
                 </li>
               
                 
            </ul> 
        </div>
          <div class="tab-pane p-3" id="l2" role="tabpanel">
            
              <h3>Java</h3>
            <ul class="list-group">
                <li class="list-group-item">01. NYA</li>
                <li class="list-group-item">02. NYA</li>
                <li class="list-group-item">03. NYA</li>
                <li class="list-group-item">04. NYA</li>
                <li class="list-group-item">05. NYA</li>
                <li class="list-group-item">06. NYA</li>
                <li class="list-group-item">07. NYA</li>
              </ul>
            </div>
          <div class="tab-pane p-3" id="l3" role="tabpanel">
              <h3>C</h3>
            <ul class="list-group">
                <li class="list-group-item">01. NYA</li>
                <li class="list-group-item">02. NYA</li>
                <li class="list-group-item">03. NYA</li>
                <li class="list-group-item">04. NYA</li>
                <li class="list-group-item">05. NYA</li>
                <li class="list-group-item">06. NYA</li>
                <li class="list-group-item">07. NYA</li>
              </ul>
            </div>
          <div class="tab-pane p-3" id="l4" role="tabpanel">
              <h3>C#</h3>
            <ul class="list-group">
                <li class="list-group-item">01. NYA</li>
                <li class="list-group-item">02. NYA</li>
                <li class="list-group-item">03. NYA</li>
                <li class="list-group-item">04. NYA</li>
                <li class="list-group-item">05. NYA</li>
                <li class="list-group-item">06. NYA</li>
                <li class="list-group-item">07. NYA</li>
              </ul>
            </div>
        </div>
            </div>
	   </div>
        <div class="col-sm-3">
        </div>
	
	</div>
	</div>
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