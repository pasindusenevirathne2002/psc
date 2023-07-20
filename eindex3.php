<?php
 include "dbase.php";
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSC Project </title>
    <!-- Bootstrap Lib's css  -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-2 text-center">
      <h2>Transfer Application (Southern Province)  </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
    
    <div class="col-12">
      <p>From the date of joining the service, the period of previous service in each work station, department and ministry and the current places of service.  </p><br>    

      <div class="row g-3">
        <div class="col-sm-6">
          <label for="" class="form-label">Date of commencement of duty : </label>
          <input type="date" class="form-control" id="from" placeholder="">
      <div class="invalid-feedback">
      
          </div>
        </div>

        <div class="col-sm-6">
          <label for="" class="form-label">Date of termination of duty : </label>
          <input type="date" class="form-control" id="to" placeholder="">
      <div class="invalid-feedback">
       
      </div>
        </div>

            <div class="col-12">
              
              <label for="inno" class="form-label">Total Time (Years/Months) :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="fulltime"placeholder="xx years xx month " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
     
              <div class="row g-3">
                
                <div class="col-sm-6">
                  <label for="mname" class="form-label">Workplace Department : </label>
                  <select name="type" id="department" class="form-control form-select" required>
                    <option value="" disabled hidden selected>----Select---- </option>
                    <option value="Department of Education">Department of Education</option>
                    <option value="The Road Development Authority">The Road Development Authority</option>
                    <option value="Department of Agriculture">Department of Agriculture</option>
                    <option value="Irrigation Department">Irrigation Department</option>
                    <option value="Department of Cooperative Development">Department of Cooperative Development </option>
                    <option value="Department of Animal Production and Health">Department of Animal Production and Health</option>
                    <option value="Department of Industrial Development">Department of Industrial Development</option>
                    <option value="Department of Social Welfare, Probation and Child Care Services">Department of Social Welfare, Probation and Child Care Services</option>
                    <option value="Department of Housing Commissioner">Department of Housing Commissioner</option>
                   
                    
                </select>
              <div class="invalid-feedback">
                
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="mname" class="form-label">Under which ministry : </label>
                  <select name="type" id="ministry" class="form-control form-select" required>
                    <option value="" disabled hidden selected>----Select---- </option>
                    
                    <option value="Chief Ministry">Chief Ministry</option>
                    <option value="Ministry of Education">Ministry of Education</option>
                    <option value="Ministry of Agriculture">Ministry of Agriculture </option>
                    <option value="Ministry of Fisheries">Ministry of Fisheries</option>
                    <option value="Ministry of Sports">Ministry of Sports</option>
                    <option value="Governor's Secretariat">Governor's Secretariat</option>
                    <option value="Council Secretariat">Council Secretariat</option>
                    <option value="Provincial Public Service Commission">Provincial Public Service Commission</option>
                    
                </select>
              <div class="invalid-feedback">
                
                  </div>
</div>
                <br>
                <button class=" btn btn-success btn-lg" onclick ="adddata()" >ADD</button>
              
                      
                          <table class="table table-bordered table-striped">
                              <!-- Table Headings -->
                              <thead>
                                  <!-- Table Heading 1st Row -->
                                  <tr>
                                      <!-- Table Heading Items -->
                                      <th ><center>NO</center></th>
                                      <th ><center>From</center></th>
                                      <th ><center>To </center> </th>
                                      
                                      <th ><center>whole time</center></th>
                                      <th ><center>Workplace Department</center>  </th>
                                      <th ><center>Under which ministry</center>  </th>
                                    
                                  </tr>
                         
                                 
                              </thead>
                              <!-- Table Body -->
                              <tbody id="ttbl">
                                  <!-- Table Body 1st Row. You can use this 1st row for loop -->
                                  <?php
                            $str1="SELECT * from workdetail";
                            $rs1=$bdd->query($str1) or die ("Error");
                 
                            while ($row1=$rs1->fetch()){
                              $edit = "edit:$row1[0]";
                              $del = "del:$row1[0]";
                      ?>                              


                        <tr>
                            <td><center><?php echo $row1[0] ?></center></td>
                            <td><center><?php echo $row1[1] ?></center></td>
                            <td><center><?php echo $row1[2] ?></center></td>
                            <td><center><?php echo $row1[3] ?></center></td>
                            <td><center><?php echo $row1[4] ?></center></td>
                            <td><center><?php echo $row1[5] ?></center></td>
                            </tr>   

                    <?php } ?>
                            </tbody>
                          </table>
    </div></div></div>
    <br>
          <p style="text-align: right;">~Page 04~</p> 
                <div id="saved"></div>
                <hr class="my-4">
                

                 <a href="eindex2.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                <a href="eindex4.php" class="btn btn-primary btn-lg">NEXT </a> 
         
        </div>
      </div>
    </div>
  </main>
</div>
<script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="myfun.js"> </script>
  </body>
  

  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata2.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        window.location.reload()
       }
   })
}
  </script>
</html>
