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
      <p><h3>ලබාගෙන ඇති භාෂා ප්‍රවීණතා මට්ටම</h3></p>

      <div class="row g-3">
        <div class="col-sm-6">
            <label for="ol" class="form-label">සිංහල :</label>
            <select name="type" id="" class="form-control form-select" required>
            <option value="" disabled hidden selected>තෝරන්න </option>
            <option value="">i මට්ටම  </option>
            <option value="">ii මට්ටම </option>
            <option value="">iii මට්ටම</option>
          </select>
        <div class="invalid-feedback">
         
        </div>
          </div>

        <div class="col-sm-6">
          <label for="ol" class="form-label">දෙමළ:</label>
          <select name="type" id="" class="form-control form-select" required>
          <option value="" disabled hidden selected>තෝරන්න </option>
          <option value="">i මට්ටම  </option>
            <option value="">ii මට්ටම </option>
            <option value="">iii මට්ටම</option>
        </select>
      <div class="invalid-feedback">
       
      </div>
        </div>

        <div class="col-12">
        <label for="inno" class="form-label">ඉංග්‍රීසි :</label>
        <select name="type" id="" class="form-control form-select" required>
          <option value="" disabled hidden selected>තෝරන්න </option>
          <option value="">ඉතා හොඳයි  </option>
          <option value="">හොඳයි  </option>
          <option value="">දුර්වලයි  </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>
      </div>
    <div class="col-12">
        <label for="ol" class="form-label">නිලධාරියා විවාහකද?:</label>
        <select name="type" id="" onchange="la(this.value)"  class="form-control form-select" required>
        <option value="" disabled hidden selected>තෝරන්න </option>
        <option value="sindex2.1.php">ඔව් </option>
        <option value="">නැත </option>
      </select>
    <div class="invalid-feedback">
     
    </div>
      </div>
    
   
    
            <div id="saved"></div>
                          <hr class="my-4">
                          <a href="sindex1.php" class="btn btn-primary btn-lg">ආපසු  </a>
                          <a href="sindex3.php" class="btn btn-primary btn-lg">ඊළඟ </a>
                      
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
                
