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
      <p><h4><center>Acquired language skills</center></h4></p>
      

      <div class="row g-3">
        <div class="col-sm-6">
            <label for="ol" class="form-label">Sinhala :</label>
            <select name="type" id="" class="form-control form-select" required>
            <option value="" disabled hidden selected>Select </option>
            <option value="">i level </option>
            <option value="">ii level</option>
            <option value="">iii level</option>
          </select>
        <div class="invalid-feedback">
         
        </div>
          </div>

        <div class="col-sm-6">
          <label for="ol" class="form-label">Tamil:</label>
          <select name="type" id="" class="form-control form-select" required>
          <option value="" disabled hidden selected>Select  </option>
          <option value="">i level </option>
            <option value="">ii level</option>
            <option value="">iii level</option>
        </select>
      <div class="invalid-feedback">
       
      </div>
        </div>

        <div class="col-12">
        <label for="inno" class="form-label">English :</label>
        <select name="type" id="" class="form-control form-select" required>
          <option value="" disabled hidden selected>Select  </option>
          <option value="">Very good  </option>
          <option value="">Good  </option>
          <option value="">Weak  </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>
 
    <div class="col-12">
      <p><h4><center>Marrege Status</center></h4></p>
        <label for="ol" class="form-label">Is the officer married??:</label>
        <select name="type" id="" onchange="la(this.value)"class="form-control form-select" required>
        <option value="" disabled hidden selected>Select </option>
        <option value="eindex2.1.php">Yes </option>
        <option value="">No </option>
      </select>
    <div class="invalid-feedback">
     
    </div>
      </div>
    </div>
           
            

             

                    
    
                <div id="saved"></div>
                <hr class="my-4">
                <a href="eindex1.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                <a href="eindex3.php" class="btn btn-primary btn-lg">NEXT </a>
         
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