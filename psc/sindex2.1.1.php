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
            <h2>ස්ථාන මාරුවීමේ අයදුම්පත්‍රය  </h2>
            <!-- <p class="lead">Some Description Here.</p> -->
          </div>





            <div class="col-12">
                <label for="inno" class="form-label">අයත් වන සේවාව:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id=""placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="inno" class="form-label">තනතුර:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id=""placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>
              <div id="saved"></div>
              <hr class="my-4">
              <a href="sindex2.1.php" class="btn btn-primary btn-lg">ආපසු </a>
              <a href="sindex2.2.php" class="btn btn-primary btn-lg">ඊළඟ </a>
       
      </div>
    </div>
  </div>
</main>
</div>

</body>

</html>