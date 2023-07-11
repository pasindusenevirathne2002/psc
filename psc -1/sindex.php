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
     
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="mname" class="form-label">පළාත් අමාත්‍යාංශය: </label>
          <select name="type" id="mySelect" class="form-control form-select" required>
            <option value="" disabled hidden selected>තෝරන්න </option>
            <option value="0">ස්වාධීන</option>
            <option value="1">ප්‍රධාන අමාත්‍යාංශය</option>
            <option value="2">අධ්‍යාපන අමාත්‍යාංශය</option>
            <option value="3">කෘෂිකර්ම අමාත්‍යාංශය </option>
            <option value="4">ධීවර අමාත්‍යාංශය</option>
            <option value="5">ක්‍රීඩා අමාත්‍යාංශය</option>
            
        </select>
      <div class="invalid-feedback">
        
          </div>
        </div>

        <div class="col-sm-6">
          <label for="dname" class="form-label">දෙපාර්තමේන්තුව:</label>
      <input type="text" class="form-control" id="dname" placeholder="" value="" required>
      <div class="invalid-feedback">
      
      </div>
        </div>


            <div class="col-12">
              <label for="inno" class="form-label">නිලධාරියාගේ සම්පූර්ණ නම:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">ජාතික හැඳුනුම්පත් අංකය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">රාජකාරි ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">පෞද්ගලික ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">ස්ථිර පදිංචි ස්ථානයේ ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">සක්‍රිය දුරකතන අංකය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Whatsapp භාවිතා කරන දුරකතන අංකය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">විද්‍යුත් තැපැල් ලිපිනය:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="mail" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            
           
    
      
          

          <div id="saved"></div>
          <hr class="my-4">
          
          <a href="sindex1.php" class="btn btn-primary btn-lg">ඊළඟ </a>
      
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>

  </body>

</html>

