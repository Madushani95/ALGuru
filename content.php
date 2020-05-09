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
            <h3>Measurement</h3>
             <ul class="list-group">
              <li class="list-group-item"> 
                   <h5 class="list-group-item-heading">01. Introduction to physics</h5>
                    <p class="list-group-item-text pl-5">19.05.2020 at 4.00pm on Nanasa TV<br>
                       <button id="submit" name="submit" type="button" class="btn btn-outline-info btn-sm" onclick='location.href="?submit=t1"'>Add to Calendar</button>
                  
                    </p>
                   
                  </li> 
              <li class="list-group-item">
                 
                  <h5 class="list-group-item-heading">02. Physical quantities and unit</h5>
                    <p class="list-group-item-text pl-5">26.05.2020 at 4.00pm on Nanasa TV<br>
                        <button id="submit" name="submit" type="button" class="btn btn-outline-info btn-sm" onclick='location.href="?submit=t2"'>Add to Calendar</button>
                    </p>
                 </li>
              <li class="list-group-item">
                 <h5 class="list-group-item-heading">03. Dimensions</h5>
                    <p class="list-group-item-text pl-5">02.06.2020 at 4.00pm on Nanasa TV<br>
                       <button id="submit" name="submit" type="button" class="btn btn-outline-info btn-sm" onclick='location.href="?submit=t3"'>Add to Calendar</button>
                    </p>
                 </li>
                 <li class="list-group-item">
                 <h5 class="list-group-item-heading">04. Measuring instrumen</h5>
                    <p class="list-group-item-text pl-5">09.06.2020 at 4.00pm on Nanasa TV<br>
                       <button id="submit" name="submit" type="button" class="btn btn-outline-info btn-sm" onclick='location.href="?submit=t4"'>Add to Calendar</button>
                    </p>
                 </li>
                 <li class="list-group-item">
                 <h5 class="list-group-item-heading">05. Scalars and vectors</h5>
                    <p class="list-group-item-text pl-5">16.06.2020 at 4.00pm on Nanasa TV<br>
                        <button id="submit" name="submit" type="button" class="btn btn-outline-info btn-sm" onclick='location.href="?submit=t5"'>Add to Calendar</button>
                    </p>
                 </li>
               
                 
            </ul> 
        </div>
          <div class="tab-pane p-3" id="l2" role="tabpanel">
            
              <h3>Mechanics</h3>
               <ul class="list-group">
                <li class="list-group-item">01. Kinematics</li>
                <li class="list-group-item">02. Resultant force and moment of force</li>
                <li class="list-group-item">03. Force and motion</li>
                <li class="list-group-item">04. Equilibrium</li>
                <li class="list-group-item">05. Work, energy and power</li>
                <li class="list-group-item">06. Rotational motion</li>
                <li class="list-group-item">07. Fluid-dynamics</li>
              </ul>
            </div>
          <div class="tab-pane p-3" id="l3" role="tabpanel">
              <h3>Oscillations and Wave</h3>
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
              <h3>Thermal Physics</h3>
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


 
<?php
    
  

if($_GET){
    include 'schedules.php';
    if(isset($_GET['submit'])){
        
       $req = $_GET['submit'];
        switch ($req) {
            case 't1':
                u1v1();
                break;
            case 't2':
                u1v2();
                break;
            case 't3':
                u1v3();
                break;
            case 't4':
                u1v4();
                break;
            case 't5':
                u1v5();
                break;
            default:
                echo "Error!";
        }
       /* if($req=='t1'){
            u1v1();     
       
        }
        if($req=='t2'){
            u1v2();  
        }
        if($req=='t3'){
            u1v3();
        } 
        if($req=='t4'){
            u1v3();
        } 
        if($req=='t5'){
            u1v3();
        } */
    }
    
    
}


   
    

       






?>