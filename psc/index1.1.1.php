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
            <h2>இடமாற்ற விண்ணப்பம்  </h2>
            <!-- <p class="lead">Some Description Here.</p> -->
          </div>


 
              

              <div class="col-12">
               <p><h2>Exam Details</h2></p>
  
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="al" class="form-label">தேர்வின் பெயர்: </label>
                    <input type="text" class="form-control" id="" placeholder="">
                <div class="invalid-feedback">
                  
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="ol" class="form-label">ஆண்டு:</label>
                <input type="number" class="form-control" id="" placeholder="" value="" required>
                <div class="invalid-feedback">
                  
                </div>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="g5" class="form-label">தேர்வு எண்:</label>
                      <input type="text" class="form-control" id="" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                      <label for="other" class="form-label">பெறப்பட்ட புள்ளிகளின் அளவு:</label>
                      <input type="number" class="form-control" id="" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>   
                  </div>
                  </div>
              </div>
              
                    <div id="saved"></div>
                    <hr class="my-4">
                    <a href="index1.1.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                    <a href="index2.php" class="btn btn-primary btn-lg">NEXT </a>
             
            </div>
          </div>
        </div>
      </main>
    </div>
    
      </body>
    
    </html>