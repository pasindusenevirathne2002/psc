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
              <label for="inno" class="form-label">සේවයේ නම:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">දැනට සිටින පන්තිය නැතහොත් ශ්‍රේණිය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">දැනට සිටින පන්තියට නැතහොත් ශ්‍රේණියට පත් කරන ලද හෝ උසස් කරන ලද දිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">දැනට ලබන වාර්ෂික වැටුප:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="curency" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">සේවයට ඇතුලත් වූ මාධ්‍යය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              

              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="" class="form-label">මුල් පත්වීම් දිනය: </label>
                  <input type="date" class="form-control" id="" placeholder="">
              <div class="invalid-feedback">
              
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="ol">පත්වීම ස්ථිර කර තිබේද?:</label>
                  <select name="type" id="" class="form-control form-select" required>
                  <option value="" disabled hidden selected>තෝරන්න </option>
                  <option value="">ඔව් </option>
                  <option value="">නැත </option>
                </select>
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-12">
                  <label for="inno" class="form-label">සේවයට ඇතුලත් වූයේ:</label>
                  <select name="type" id="addservice"onchange="la(this.value)"class="form-control form-select" required>
                    <option value="" disabled hidden selected>තෝරන්න </option>
                    <option value="sindex1.1.php">පළාත් සභා පත්වීමෙන්   </option>
                    <option value="sindex1.2.php"> මධ්‍යම රාජ්‍ය සේවය  </option>
                  </select>
                  <div class="invalid-feedback">
                 
                    </div>
                  </div>
                </div>
            
                

  
                  
                    
    
                    <div id="saved"></div>
                    <hr class="my-4">
                    <a href="sindex.php" class="btn btn-primary btn-lg">ආපසු  </a>
                    <a href="sindex2.php" class="btn btn-primary btn-lg">ඊළඟ </a>
                
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
          
