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
            <h2>இடமாற்ற விண்ணப்பம்  </h2>
            <!-- <p class="lead">Some Description Here.</p> -->
          </div>




            <div class="col-12">
              <label for="inno" class="form-label">குழந்தைகளின் பெயர்கள் :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
               
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">வயது :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id=""placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
                <label for="inno" class="form-label">பாடசாலையின் பெயர்:</label>
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
                      <th ><center>பெயர்கள் </center></th>
                      <th ><center>வயது  </center> </th>
                      <th ><center>கல்லூரி </center></th>
                      <th ><center>தெரிவுகள்  </center>  </th>
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
              <a href="index2.2.php" class="btn btn-primary btn-lg">முந்தைய </a>
              <a href="index3.php" class="btn btn-primary btn-lg">அடுத்து </a>
       
      </div>
    </div>
  </div>
</main>
</div>

</body>

</html>