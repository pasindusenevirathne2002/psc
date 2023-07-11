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
      <h2>Transfer Application  </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
    
            <div class="col-12">
              <label for="inno" class="form-label">The name of the service:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="sname"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Current class or grade:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="grade" class="form-control form-select" required>
                  <option value="" disabled hidden selected>Select</option>
                  <option value="I">I </option>
                  <option value="II">II</option>
                  <option value="III">III</option>
                  <option value="SUPRA">SUPRA</option>
                  <option value="SUPER">SUPER</option>
                </select>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Date of appointment or promotion to present class or grade:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="sdate"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Current annual salary:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="sallery"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">The media included in the service:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="media" class="form-control form-select" required>
                  <option value="" disabled hidden selected>Select</option>
                  <option value="Sinhala">Sinhala </option>
                  <option value="Tamil">Tamil </option>
                  <option value="English">English </option>
                </select>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              

              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="" class="form-label">Date of original appointment: </label>
                  <input type="date" class="form-control" id="adate" placeholder="">
              <div class="invalid-feedback">
              
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="ol" class="form-label">Is the appointment confirmed?:</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>Select</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-12">
                <label for="inno" class="form-label">Joined the service:</label>
                <!-- onchange="la(this.value)" -->
                <select name="type" id="appointment" class="form-control form-select" required>
                  <option value="" disabled hidden selected>Select </option>
                  <!-- eindex1.1.php -->
                  <option value=" By appointing the Provincial Council" ><a href="eindex1.1.php"> By appointing the Provincial Council</a></option>
                  <!-- eindex1.2.php -->
                  <option value=" Central Government Service" > <a href="eindex1.2.php"> Central Government Service</a>  </option>
                </select>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>
<br>

<!-- <a href="eindex1.1.php"> By appointing the Provincial Council</a> <br>  
<a href="eindex1.2.php"> Central Government Service</a>        -->
  
            
                  
                    
    
                <div id="saved"></div>
                <hr class="my-4">
                <!-- <button class="w-100 btn btn-success btn-lg" onclick ="adddata()" >SAVE</button> -->
                <a href="eindex.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                <a href="eindex2.php" class="btn btn-primary btn-lg" onclick ="adddata()" >NEXT </a>
         
        </div>
      </div>
    </div>
  </main>
</div>
<script>
  function la(src){
    window.location=src;
  }
</script>
<script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
      <script type="text/javascript" src="myfun.js"> </script>
  </body>
  

  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata1.php',
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
