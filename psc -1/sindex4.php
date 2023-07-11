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
        <label for="inno" class="form-label">නිලධාරියා මාරුවීමට අපේක්ෂා කරන්නේ :</label>
        <select name="type" id="" onchange="la(this.value)"class="form-control form-select" required>
          <option value="" disabled hidden selected>තෝරන්න </option>
          <option value="sindex4.1.php">පළාත් රාජ්‍ය සේවය    </option>
          <option value="sindex4.2.php"> මධ්‍යම රාජ්‍ය සේවය  </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>

          <div id="saved"></div>
          <hr class="my-4">
          <a href="sindex3.php" class="btn btn-primary btn-lg">ආපසු  </a>
          <!-- <a href="" class="btn btn-primary btn-lg">අවසන් කරන්න </a> -->
      
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
