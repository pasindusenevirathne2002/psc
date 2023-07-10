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
            <h2>ස්ථාන මාරුවීමේ අයදුම්පත්‍රය </h2>
            <!-- <p class="lead">Some Description Here.</p> -->
          </div>


<div class="col-12">
    <p><h4><center>Marrege Status</center></h4></p>
              <label for="inno" class="form-label">කාලත්‍රයාගේ නම:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">කාලත්‍රයා රැකියාවක් කරන්නේ නම් සේවා ස්ථානයේ ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">කාලත්‍රයාගේ ස්ථිර පදිංචි ස්ථානයේ ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

         
            <div class="col-12">
                <label for="ol" class="form-label">තම කාලත්‍රයා ත්‍රිවිධ හමුදාවේ හෝ පොලිස් බල ඇණියේ සේවයේ නියුතුද?:</label>
                <select name="type" id="" onchange="la(this.value)"  class="form-control form-select" required>
                <option value="" disabled hidden selected>තෝරන්න </option>
                <option value="sindex2.1.1.php">ඔව් </option>
                <option value="">නැත </option>
              </select>
            <div class="invalid-feedback">
            </div>
            </div>
             
           
              <div id="saved"></div>
              <hr class="my-4">
              <a href="sindex2.php" class="btn btn-primary btn-lg">ආපසු </a>
              <a href="sindex2.2.php" class="btn btn-primary btn-lg">ඊළඟ </a>
       
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