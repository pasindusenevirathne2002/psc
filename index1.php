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
              <label for="inno" class="form-label">சேவையின் பெயர்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">தற்போதைய வகுப்பு அல்லது தரம்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">தற்போதைய வகுப்பு அல்லது தரத்திற்கான நியமனம் பெற்ற அல்லது பதவி உயர்வுத் திகதி:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">தற்போது பெற்றுக்கொள்ளும் வருடாந்தச் சம்பளம்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="curency" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">சேவையில் சேர்ந்தார் ஊடகம்:</label>
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
                  <label for="" class="form-label">முதல் நியமனத் திகதி: </label>
                  <input type="date" class="form-control" id="" placeholder="">
              <div class="invalid-feedback">
              
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="ol" class="form-label">நியமனம் நிரந்தரமா?:</label>
                  <select name="type" id="" class="form-control form-select" required>
                  <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                  <option value="">ஆம் </option>
                  <option value="">இல்லை </option>
                </select>
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-12">
                <label for="inno" class="form-label">சேவையில் சேர்ந்தது:</label>
                <select name="type" id="" onchange="la(this.value)"class="form-control form-select" required>
                  <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                  <option value="index1.1.php">மாகாண சபையை நியமிப்பின் மூலம்   </option>
                  <option value="index1.2.php">மத்திய பொது சேவை  </option>
                </select>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              

             

                    </div></div>
    
                <div id="saved"></div>
                <hr class="my-4">
                <a href="index.php" class="btn btn-primary btn-lg">முந்தைய
                </a>
                <a href="index2.php" class="btn btn-primary btn-lg">அடுத்து </a>
         
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
