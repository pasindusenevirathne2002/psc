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
            <br><p><u><h3>පළාත් රාජ්‍ය සේවය</h3></u></p><br>
          <label for="inno" class="form-label">මාරුවීම අපේක්ෂා කරන පළාත් සභාව:</label>
          <select name="type" id="" class="form-control form-select" required>
            <option value="" disabled hidden selected>තෝරන්න </option>
            
            <option value="">පළාත් පාලන දෙපාර්තමේන්තුව
            </option>
            <option value="">ගාල්ල මහා නගර සභාව
            </option>
            <option value="">අම්බලන්ගොඩ නගර සභාව
            </option>
            <option value="">නියාගම ප්‍රාදේශීය සභාව
            </option>
            <option value="">නෙළුව ප්‍රාදේශීය සභාව
            </option>
            <option value="">බෙන්තොට ප්‍රාදේශීය සභාව
            </option>
            <option value="">වැලිවිටිය දිවිතුර ප්‍රාදේශීය සභාව
            </option>
            <option value="">බෝපේ පෝදදල ප්‍රාදේශීය සභාව
            </option>
            <option value="">රජ්ගම ප්‍රාදේශීය සභාව
            </option>
            <option value="">හික්කඩුව නගර සභාව
            </option>
            <option value="">ඉමදූව ප්‍රාදේශීය සභාව
            </option>
            <option value="">අක්මීමන ප්‍රාදේශීය සභාව
            </option>
            <option value="">බද්දේගම ප්‍රාදේශීය සභාව
            </option>
            <option value="">නාගොඩ ප්‍රාදේශීය සභාව
            </option>
            <option value="">කරන්දෙණිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">තවලම ප්‍රාදේශීය සභාව
            </option>
            <option value="">යක්කලමුල්ල ප්‍රාදේශීය සභාව
            </option>
            <option value="">හබරාදූව ප්‍රාදේශීය සභාව
            </option>
            <option value="">අම්බලන්ගොඩ ප්‍රාදේශීය සභාව
            </option>
            <option value="">ඇල්පිටිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">බලපිටිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">මාතර මහා නගර සභාව
            </option>
            <option value="">දෙවිනුවර ප්‍රාදේශීය සභාව
            </option>
            <option value="">කොටපොල ප්‍රාදේශීය සභාව
            </option>
            <option value="">පිටබැද්දර ප්‍රාදේශීය සභාව
            </option>
            <option value="">පස්ගොඩ ප්‍රාදේශීය සභාව
            </option>

            <option value="">වැලිගම නගර සභාව
            </option>
            <option value="">කිරින්ද පුහුල්වැල්ල ප්‍රාදේශීය සභාව
            </option>
            <option value="">මුලටියන ප්‍රාදේශීය සභාව
            </option>
            <option value="">අතුරලිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">දික්වැල්ල ප්‍රාදේශීය සභාව
            </option>
            <option value="">කඹුරුපිටිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">මාතර ප්‍රාදේශීය සභාව
            </option>
            <option value="">හක්මන ප්‍රාදේශීය සභාව
            </option>
            <option value="">අකුරැස්ස ප්‍රාදේශීය සභාව
            </option>
            <option value="">වැලිගම ප්‍රාදේශීය සභාව
            </option>

            <option value="">තිහගොඩ ප්‍රාදේශිය සභාව
            </option>
            <option value="">මාලිම්බඩ ප්‍රාදේශීය සභාව
            </option>
            <option value="">හම්බන්තොට මහා නගර සභාව
            </option>
            <option value="">තංගල්ල නගර සභාව
            </option>
            <option value="">අම්බලන්තොට ප්‍රාදේශීය සභාව
            </option>
            <option value="">සූරියවැව ප්‍රාදේශීය සභාව
            </option>
            <option value="">බෙලිඅත්ත ප්‍රාදේශීය සභාව
            </option>
            <option value="">ලුණුගම්වෙහෙර ප්‍රාදේශීය සභාව
            </option>
            <option value="">අඟුණුකොළපැලැස්ස ප්‍රාදේශීය සභාව
            </option>
            <option value="">කටුවන ප්‍රාදේශීය සභාව
            </option>
            <option value="">හම්බන්තොට ප්‍රාදේශීය සභාව
            </option>
            <option value="">තිස්සමහාරාම ප්‍රාදේශීය සභාව
            </option>
            <option value="">වීරකැටිය ප්‍රාදේශීය සභාව
            </option>
            <option value="">තංගල්ල ප්‍රාදේශීය සභාව
            </option>
           
          </select>
          <div class="invalid-feedback">
         
            </div>
          </div>
        

        <div class="col-12">
            
          <label for="inno" class="form-label">පළාත් අමාත්‍යාංශය:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">පළාත් දෙපාර්තමේන්තුව:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">සේවා ස්ථානය :</label>
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