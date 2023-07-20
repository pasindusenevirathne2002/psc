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
      <h2>Application Form for Temporary Attachment  </h2>
      <h2>Southern Province</h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
   

    <div class="col-12">
              <label for="inno" class="form-label">Reason</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="permenat" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="pregnancy">pregnancy </option>
                  <option value="Medical Reasons">Medical Reasons   </option>
                  <option value="Accidents">Accidents </option>
                </select>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

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
              <label for="inno" class="form-label">Address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="nicno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Date of Birth:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">National Identity Card Number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Phone number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Currently working place:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Nature of service:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="grade" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="permanent"> permanent</option>
                  <option value="Attachment ">Attachment </option>
                 
                </select>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

          

            <div class="col-12">
              <label for="inno" class="form-label">Date of reporting to present duty station:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="inno"placeholder="xx year xx month xx date " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <!-- <div class="col-12">
              <label for="inno" class="form-label">Subjects currently taught:</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div> -->

            <div class="col-12">
              <label for="inno" class="form-label">Province where Attachment :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <select name="type" id="grade" class="form-control form-select" required>
                  <option value="" disabled hidden selected>----Select----</option>
                  <option value="Central Province ">01. Central Province </option>
                  <option value="Eastern Province">02. Eastern Province</option>
                  <option value="Northern Province">03. Northern Province</option>
                  <option value="Western Province ">04. Western Province </option>
                  <option value="North Western Province">05. North Western Province</option>
                  <option value="North Central Province ">06. North Central Province </option>
                  <option value="Uva Province">07. Uva Province</option>
                  <option value="Sabaragamuwa Province ">08. Sabaragamuwa Province </option>
                </select>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Reason for requesting Attachment  (briefly) :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required><button class="btn btn-primary btn-lg" >Attachment </button>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>
<h3><center>Details of Privious Attachments</center></h3><br>
            <div class="col-12">
            <div class="row g-3">
           
               <div class="col-4">
              <label for="inno" class="form-label">FROM</label>
              <div class="input-group has-validation">
              <input type="date" class="form-control" id="inno"placeholder=" " required>
              
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
              </div>

            <div class="col-4">
              <label for="inno" class="form-label">TO</label>
              <div class="input-group has-validation">
              <input type="date" class="form-control" id="inno"placeholder=" " required>
              
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
              </div>

            <div class="col-4">
              <label for="inno" class="form-label">Period</label>
              <div class="input-group has-validation">
              <input type="text" class="form-control" id="inno"placeholder=" " required>
              
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Work place:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
          
           </div>
           
           <div class="col-12">
              <label for="inno" class="form-label">Reason:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
          
           </div><br>
           <h4><center>Applicant's Statement</center></h4>
<p><center><h5><input type="checkbox"  name="" value="" required>I certify that all the above information is true and correct.</h5></center></p>
           <br>
           <p style="text-align: right;">~Page 01~</p>
          <div id="saved"></div>
          <hr class="my-4">

           <!-- <button class="btn btn-primary btn-lg" >Attachment </button>  -->
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
