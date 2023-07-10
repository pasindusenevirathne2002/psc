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
            <h2>Transfer Application  </h2>
            <!-- <p class="lead">Some Description Here.</p> -->
          </div>


          <div class="col-12">
            <br><p><u><h3>Provincial Government Service</h3></u></p><br>
          <label for="inno" class="form-label">The provincial council that is expected to transfer :</label>
          <select name="type" id="" class="form-control form-select" required>
            <option value="" disabled hidden selected>Select </option>
            
            <option value="">Galle Municipal Council
            </option>
            <option value="">Ambalangoda Municipal Council
            </option>
            <option value="">Niagama Regional Council
            </option>
            <option value="">Neluva Regional Council
            </option>
            <option value="">Bentota Regional Council
            </option>
            <option value="">Welivitiya Divithura Regional Council
            </option>
            <option value="">Bope Podadala Regional Council
            </option>
            <option value="">Rajgama local council
            </option>
            <option value="">Hikkaduwa City Council
            </option>
            <option value="">Imaduwa Regional Council
            </option>
            <option value="">Akmeemana Regional Council
            </option>
            <option value="">Baddegama Regional Council
            </option>
            <option value="">Nagoda Regional Council
            </option>
            <option value="">Karandeniya Regional Council
            </option>
            <option value="">Tavalama Pradeshiya Sabha
            </option>
            <option value="">Yakkalamulla Regional Council
            </option>
            <option value="">Habaraduwa Regional Council
            </option>
            <option value="">Ambalangoda Regional Council
            </option>
            <option value="">Elpitiya Regional Council
            </option>
            <option value="">Balapitiya Regional Council
            </option>
            <option value="">Matara Municipal Council
            </option>
            <option value="">Devinuwara Regional Council
            </option>
            <option value="">Kotapola Regional Council
            </option>
            <option value="">Pitabeddara Pradeshiya Sabha
            </option>
            <option value="">Pasgoda Regional Council
            </option>

            <option value="">Weligama Municipal Council
            </option>
            <option value="">Kirinda Puhulwella Regional Council
            </option>
            <option value="">Mullatiyana Regional Council
            </option>
            <option value="">Athuraliya Pradeshiya Sabha
            </option>
            <option value="">Dickwella Regional Council
            </option>
            <option value="">Kamburupitiya Regional Council
            </option>
            <option value="">Matara Regional Council
            </option>
            <option value="">Hakmana Regional Council
            </option>
            <option value="">Akuressa Regional Council
            </option>
            <option value="">Weligama local council
            </option>

            <option value="">Tihagoda Regional Council
            </option>
            <option value="">Malimbada Regional Council
            </option>
            <option value="">Hambantota Maha nagara Sabha
            </option>
            <option value="">Tangalle Municipal Council
            </option>
            <option value="">Ambalantota Regional Council
            </option>
            <option value="">Suriyawewa Regional Council
            </option>
            <option value="">Beliatta Regional Council
            </option>
            <option value="">Lunugamwehera Regional Council
            </option>
            <option value="">Angunukolapalassa Regional Council
            </option>
            <option value="">Katuwana Regional Council
            </option>
            <option value="">Hambantota Regional Council
            </option>
            <option value="">Tissamaharama Regional Council
            </option>
            <option value="">Weerakatiya Regional Council
            </option>
            <option value="">Tangalle Regional Council
            </option>
           
          </select>
          <div class="invalid-feedback">
         
            </div>
          </div>
        

        <div class="col-12">
            
          <label for="inno" class="form-label">Provincial Ministry:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">Provincial Department:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">Service station :</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>
        <div class="col-12">
          <label for="inno" class="form-label">Reasons for requesting transfers :</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="textbox" class="form-control" id="inno"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>  

              
              
              
                    <div id="saved"></div>
                    <hr class="my-4">
                    <a href="eindex4.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                    <a href="index01.php" class="btn btn-primary btn-lg">FINISH </a>
             
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