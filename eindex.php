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
      <h2>Transfer Application (Southern Province) </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
   
    <div class="col-12">
     
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="mname" class="form-label">Southern Provincial Ministry: </label>

          <select name="type" id="type" class="form-control form-select" required>
            <option value="" disabled hidden selected>----Select---- </option>
           
            <option value="Chief Ministry">Chief Ministry</option>
            <option value="Ministry of Education">Ministry of Education</option>
            <option value="Ministry of Agricultur">Ministry of Agriculture </option>
            <option value="Ministry of Fisheries">Ministry of Fisheries</option>
            <option value="Ministry of Sports">Ministry of Sports</option>
            <option value="Governor's Secretariat">Governor's Secretariat</option>
            <option value="Council Secretariat">Council Secretariat</option>
            <option value="Provincial Public Service Commission">Provincial Public Service Commission</option>
            
        </select>
      <div class="invalid-feedback">
        Pleace Enter Your Details.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="dname" class="form-label">Department:</label>
      <input type="text" class="form-control" id="dname" placeholder="" value="" required>
      <div class="invalid-feedback">
      Pleace Enter Your Details.
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
              <label for="inno" class="form-label">NIC Number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="nicno"placeholder=" " required>
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
              <label for="inno" class="form-label">Personal address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="address"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Address of permanent residence:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Active phone number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Phone number using Whatsapp:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Email address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="mail" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
              Pleace Enter Your Details.
                </div>
              </div>
            </div>
           </div>
           </div><br>
           <p style="text-align: right;">~Page 01~</p>
          <div id="saved"></div>
          <hr class="my-4">

          <!-- <button class="btn btn-primary btn-lg" onclick ="adddata()" >SAVE</button> -->
          <a href="eindex1.php"name="next" class="btn btn-primary btn-lg" onclick ="adddata()">NEXT </a>
      
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
