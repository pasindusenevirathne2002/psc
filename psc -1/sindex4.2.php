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
            <br> <p><u><h3>මධ්‍යම රාජ්‍ය සේවය</h3></u> </p><br>
           <label for="inno" class="form-label">මාරුවීම අපේක්ෂා කරන අමාත්‍යාංශය:</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="inno"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
           <label for="inno" class="form-label">දෙපාර්තමේන්තුව:</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="inno"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
           <label for="inno" class="form-label">සේවා ස්ථානය  :</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="inno"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
             <label for="inno" class="form-label">මාරුවීම් ඉල්ලුම්කිරීමට හේතු :</label>
             <div class="input-group has-validation">
               <!--<span class="input-group-text">@</span>-->
               <input type="textbox" class="form-control" id="inno"placeholder=" " required>
             <div class="invalid-feedback">
            
               </div>
             </div>
              
              
              
                    <div id="saved"></div>
                    <hr class="my-4">
                    <a href="sindex4.php" class="btn btn-primary btn-lg">ආපසු </a>
                    <a href="index01.php" class="btn btn-primary btn-lg">අවසන් කරන්න </a>
             
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