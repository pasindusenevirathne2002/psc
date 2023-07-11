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
              <label for="inno" class="form-label">දරුවන්ගේ නම් :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
               
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">වයස :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
                <label for="inno" class="form-label">පාසැල:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id=""placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
            </di>
<br>

            <table class="table table-bordered table-striped">
              <!-- Table Headings -->
              <thead>
                  <!-- Table Heading 1st Row -->
                  <tr>
                      <!-- Table Heading Items -->
                      <th ><center>නම </center></th>
                      <th ><center>වයස  </center> </th>
                      <th ><center>පාසල </center></th>
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

              </div>
              <div id="saved"></div>
              <hr class="my-4">
              <a href="sindex2.2.php" class="btn btn-primary btn-lg">ආපසු </a>
              <a href="sindex3.php" class="btn btn-primary btn-lg">ඊළඟ </a>
       
      </div>
    </div>
  </div>
</main>
</div>

</body>

</html>