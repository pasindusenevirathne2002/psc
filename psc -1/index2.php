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
              <p>பெற்றுக் கொண்டுள்ள மொழித் தேர்ச்சி </p>

              <div class="row g-3">
                <div class="col-sm-6">
                    <label for="ol" class="form-label">சிங்களம் :</label>
                    <select name="type" id="" class="form-control form-select" required>
                    <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                    <option value="">i மட்டம்  </option>
                    <option value="">ii மட்டம் </option>
                    <option value="">iii மட்டம் </option>
                  </select>
                <div class="invalid-feedback">
                 
                </div>
                  </div>
    
                <div class="col-sm-6">
                  <label for="ol" class="form-label">தமிழ்:</label>
                  <select name="type" id="" class="form-control form-select" required>
                  <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                  <option value="">i மட்டம்  </option>
                    <option value="">ii மட்டம் </option>
                    <option value="">iii மட்டம்</option>
                </select>
              <div class="invalid-feedback">
               
              </div>
                </div>

                <div class="col-12">
                <label for="inno" class="form-label">ஆங்கிலம் :</label>
                <select name="type" id="" class="form-control form-select" required>
                  <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                  <option value="">மிக்க நன்று  </option>
                  <option value="">நன்று  </option>
                  <option value="">பலவீனமாக உள்ளது  </option>
                </select>
                <div class="invalid-feedback">
               
                  </div>
                
              </div>
              <div class="col-12">
        <label for="ol" class="form-label">அதிகாரி திருமணமானவரா?:</label>
        <select name="type" id="" onchange="la(this.value)"class="form-control form-select" required>
        <option value="" disabled hidden selected>தேர்ந்தெடு </option>
        <option value="index2.1.php">ஆம் </option>
        <option value="index2.2.php">இல்லை </option>
      </select>
    <div class="invalid-feedback">
     
    </div>
      </div>
            </div>

             
</div>
                    
    
                <div id="saved"></div>
                <hr class="my-4">
                <a href="index1.php" class="btn btn-primary btn-lg">முந்தைய
                </a>
                <a href="index3.php" class="btn btn-primary btn-lg">அடுத்து</a>
         
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
