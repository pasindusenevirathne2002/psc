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
      <h2>இடமாற்ற விண்ணப்பம் </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>

    <div class="col-12">
        <label for="inno" class="form-label">அதிகாரி வரும்பும் இடமாற்றம், எதிர்பார்க்கப்படுகிறது? :</label>
        <select name="type" id="" onchange="la(this.value)"class="form-control form-select" required>
          <option value="" disabled hidden selected>தேர்ந்தெடு </option>
          <option value="index4.1.php">மாகாண அரசாங்க சேவை    </option>
          <option value="index4.2.php"> மத்திய அரசு சேவை  </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>
      
 
    

            

    
          <div id="saved"></div>
          <hr class="my-4">
          <a href="index3.php" class="btn btn-primary btn-lg">முந்தைய
          </a>
          <!-- <a href="index.html" class="btn btn-primary btn-lg">மடக்கு </a> -->
      
          <input type="hidden" id="subno" value="0">
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
  </body>

</html>
