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
      <h2>Application for promotion in grade (Southern Province) </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
   
    <h3><center><u>Information about the officer</u></center></h3>

            <div class="col-12">
              <label for="inno" class="form-label">Full name of the officer:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="officername"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">NIC Number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="TEXT" class="form-control" id="nicno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Duty Address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Position:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Category and grade of service to which it belongs:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <h3><center><u>Appointment information</u></center></h3>

            <div class="col-12">
              <label for="inno" class="form-label">Date of appointment:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Date of confirmation of appointment:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
            <div class="row g-3">
            <div class="col-4">

              <label for="inno" class="form-label">Efficiency bar exam:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="grade" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                 
                  <option value="III">III</option>
                  <option value="II">II</option>
                  <option value="I">I</option>
                </select>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>
            

            <div class="col-4">
              <label for="inno" class="form-label">Due date of completion:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
              </div>

            <div class="col-4">
              <label for="inno" class="form-label">Passed Date :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
              </div>
            </div>
            
            <div class="col-12">
            <div class="row g-3">
            <div class="col-4">

              <label for="inno" class="form-label">Language proficiency level:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            

            <div class="col-4">
              <label for="inno" class="form-label">Date of must pass:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-4">
              <label for="inno" class="form-label">Passed Date :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <h3><center><u>Promotion related information</u></center></h3>

            <div class="col-12">
              <label for="inno" class="form-label">Expected promotion grade:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="grade" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                 
                  <option value="II">II</option>
                  <option value="I">I</option>
                  <option value="SPECIAL">SPECIAL</option>
                </select>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-sm-12">
                  <label for="ol" class="form-label">Completed the required active service period?:</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
                <!-- <input type="radio"  name="speriod" value="yes"required> YES
                 <input type="radio"  name="speriod" value="no"required> NO -->
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-12">
              <label for="inno" class="form-label">Date of completion of active service :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>
            <div class="col-sm-12">
                  <label for="ol" class="form-label">Have demonstrated a satisfactory level of performance or above during the expected period of active service?</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
                <!-- <input type="radio"  name="active" value="yes"required> YES 
                <input type="radio"  name="active" value="no" required> NO -->
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-sm-12">
                  <label for="ol" class="form-label">Have the due salary increments been earned?</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
                <!-- <input type="radio"  name="sallary"value="yes" required> YES 
                <input type="radio"  name="sallary"value="no" required> NO -->
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-sm-12">
                  <label for="ol" class="form-label">Have completed satisfactory service in the five years preceding the promotion?</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
                <!-- <input type="radio"  name="satisfac" value="yes" required> YES 
                <input type="radio" name="satisfac"value="no " required> NO -->
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-sm-12">
                  <label for="ol" class="form-label">Have you been disciplined?</label>
                  <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Yes">Yes </option>
                  <option value="No">No </option>
                </select>
                <!-- <input type="radio" name="disciplin"value="yes" required> YES 
                <input type="radio"  name="disciplin" value="yes" required> NO -->
              <div class="invalid-feedback">
               
              </div>
         

               
              
          

     
           </div>
           
           <h4><center>Applicant's Statement</center></h4>
<p><center><h5><input type="checkbox"  name="" value="" required>I certify that all the above information is true and correct.</h5></center></p>
           <br>
           <p style="text-align: right;">~Page 01~</p>
          <div id="saved"></div>
          <hr class="my-4">

          <!-- <button class="btn btn-primary btn-lg" onclick ="adddata()" >SAVE</button> -->
          <button class="btn btn-primary btn-lg" onclick ="adddata()">SUBMIT </button>
      
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>
<script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="myfun.js"> </script>
  </body>
  
<script>
   function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        //  window.location.reload()
       }
   })
}
</script>
</html>
