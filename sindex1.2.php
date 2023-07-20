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


          <div class="col-sm-6">
            <label for="ol" id="adate" class="form-label">දකුණු පළාත් සභා රාජ්‍ය සේවයට අන්තර්ග්‍රහණය වූ දිනය:
        <input type="date" class="form-control" placeholder="" value="" required></label>
        <div class="invalid-feedback">
          
        </div>
          </div>

        <div class="col-sm-6">
            <label for="ol" id="ano"class="form-label">දකුණු පළාත් සභා රාජ්‍ය සේවයට අන්තර්ග්‍රහණය වූ යොමු අංකය:
        <input type="number" class="form-control"  placeholder="" value="" required></label>
        <div class="invalid-feedback">
          
        </div>
          </div>
          </div></div></div>
          

          <div id="saved"></div>
          <hr class="my-4">
          <a href="sindex1.php" class="btn btn-primary btn-lg">ආපසු  </a>
          <a href="sindex2.php" class="btn btn-primary btn-lg">ඊළඟ </a>
          
              
              
              
                  
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