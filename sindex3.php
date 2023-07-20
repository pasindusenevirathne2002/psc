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
      <p>සේවයට ඇතුලත් වූ දවසේ සිට එක් එක් කාර්ය ස්ථානයක, දෙපාර්තමේන්තුවක සහ අමාත්‍යාංශයක මෙයට කලින් සේවය කළ කාල සීමාව හා දැනට සේවය කරන ස්ථාන  </p><br>    

      <div class="row g-3">
        <div class="col-sm-6">
          <label for="" class="form-label">සිට : </label>
          <input type="date" class="form-control" id="" placeholder="">
      <div class="invalid-feedback">
      
          </div>
        </div>

        <div class="col-sm-6">
          <label for="" class="form-label">දක්වා : </label>
          <input type="date" class="form-control" id="" placeholder="">
      <div class="invalid-feedback">
       
      </div>
        </div>

            <div class="col-12">
              
              <label for="inno" class="form-label">මුලු කාලය (අවුරුදු/මාස) :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
     
              <div class="row g-3">
                
                <div class="col-sm-6">
                  <label for="mname" class="form-label">කාර්ය ස්ථාන දෙපාර්තමේන්තුව : </label>
                  <select name="type" id="type" class="form-control form-select" required>
                    <option value="" disabled hidden selected>තෝරන්න </option>
                    <option value="">අධ්‍යාපන දෙපාර්තමේන්තුව</option>
                    <option value="">මාර්ග සංවර්ධන අධිකාරිය</option>
                    <option value="">කෘෂිකර්ම දෙපාර්තමේන්තුව</option>
                    <option value="">වාරිමාර්ග දෙපාර්තමේන්තුව</option>
                    <option value="">සමූපකාර සංවර්ධන දෙපාර්තමේන්තුව </option>
                    <option value="">සත්ව නිෂ්පාදන හා සෞඛ්‍ය දෙපාර්තමේන්තුව</option>
                    <option value="">කර්මාන්ත සංවර්ධන දෙපාර්තමේන්තුව</option>
                    <option value="">සමාජ සුබසාධන, පරිවාස හා ළමාරක්ෂක සේවා දෙපාර්තමේන්තුව</option>
                    <option value="">නිවාස කොමසාරිස් දෙපාර්තමේන්තුව</option>
                    <option value="">ආණ්ඩුකාර ලේකම් කාර්යාලය</option>
                    <option value="">සභා ලේකම් කාර්යාලය</option>
                    <option value="">පළාත් රජ්‍ය සේවා කොමිෂන් සභාව</option>
                    
                </select>
              <div class="invalid-feedback">
                
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="mname" class="form-label">කවර අමාත්‍යාංශයක් යටතේද : </label>
                  <select name="type" id="type" class="form-control form-select" required>
                    <option value="" disabled hidden selected>තෝරන්න </option>
                    <option value="">ස්වාධීන</option>
                    <option value="">ප්‍රධාන අමාත්‍යාංශය</option>
                    <option value="">අධ්‍යාපන අමාත්‍යාංශය</option>
                    <option value="">කෘෂිකර්ම අමාත්‍යාංශය </option>
                    <option value="">ධීවර අමාත්‍යාංශය</option>
                    <option value="">ක්‍රීඩා අමාත්‍යාංශය</option>
                    
                </select>
              <div class="invalid-feedback">
                
                  </div>
                </div>

              
                      
                          <table class="table table-bordered table-striped">
                              <!-- Table Headings -->
                              <thead>
                                  <!-- Table Heading 1st Row -->
                                  <tr>
                                      <!-- Table Heading Items -->
                                      <th ><center>සිට</center></th>
                                      <th ><center>දක්වා </center> </th>
                                      
                                      <th ><center>මුළු කාලය </center></th>
                                      <th ><center>කාර්ය ස්ථාන දෙපාර්තමේන්තුව</center>  </th>
                                      <th ><center>කවර අමාත්‍යාංශයක් යටතේද</center>  </th>
                                      <th ><center>විකල්ප  </center>  </th>
                                  </tr>
                         
                                 
                              </thead>
                              <!-- Table Body -->
                              <tbody id="ttbl">
                                  <!-- Table Body 1st Row. You can use this 1st row for loop -->
                                       
          
          
                                  <tr>
                                     
                                  
                                     
                                  </tr>   
          
                              
             
                                  </tbody>
                          </table>
    </div></div></div></div>
                          <div id="saved"></div>
                          <hr class="my-4">
                          <a href="sindex2.php" class="btn btn-primary btn-lg">ආපසු  </a>
                          <a href="sindex4.php" class="btn btn-primary btn-lg">ඊළඟ </a>
                      
                          <input type="hidden" id="subno" value="0">
                        </div>
                      </div>
                    </div>
                  </main>
                </div>
                
                  </body>
                
                </html>
                