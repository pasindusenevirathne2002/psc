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
                <label for="inno" class="form-label">Belonging service:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id=""placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="inno" class="form-label">position:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id=""placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>
              <div id="saved"></div>
              <hr class="my-4">
              <a href="eindex2.1.php" class="btn btn-primary btn-lg">PREVIOUS </a>
              <a href="eindex2.2.php" class="btn btn-primary btn-lg">NEXT </a>
       
      </div>
    </div>
  </div>
</main>
</div>

</body>

</html>