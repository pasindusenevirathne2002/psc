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
     
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="mname" class="form-label">மாகாண அமைச்சு : </label>
          <select name="type" id="type" class="form-control form-select" required>
            <option value="" disabled hidden selected>தேர்ந்தெடு </option>
            <option value="0">ஒரு சுதந்திரமான</option>
            <option value="1">தலைமை அமைச்சு</option>
            <option value="2">கல்வி அமைச்சு </option>
            <option value="3">விவசாய அமைச்சு  </option>
            <option value="4">கடற்றொழில் அமைச்சு </option>
            <option value="5">விளையாட்டுத்துறை அமைச்சு </option>
            
        </select>
      <div class="invalid-feedback">
        
          </div>
        </div>

        <div class="col-sm-6">
          <label for="dname" class="form-label">துறை:</label>
      <input type="text" class="form-control" id="dname" placeholder="" value="" required>
      <div class="invalid-feedback">
      
      </div>
        </div>


            <div class="col-12">
              <label for="inno" class="form-label">அதிகாரியின் முழு பெயர்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">தேசிய அடையாள அட்டை எண்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>
            <div class="col-12">
              <label for="inno" class="form-label">கடமை முகவரி:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">தனிப்பட்ட முகவரி:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">நிரந்தர குடியிருப்பு முகவரி:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">செயலில் உள்ள தொலைபேசி எண்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Whatsapp தொலைபேசி எண்:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">மின்னஞ்சல் முகவரி:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="mail" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>
           </div></div>
    
          <div id="saved"></div>
          <hr class="my-4">

          <a href="index1.php" class="btn btn-primary btn-lg">அடுத்து </a>
      
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>

  </body>

</html>
