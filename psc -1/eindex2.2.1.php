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
              <label for="inno" class="form-label">Children's names :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="name"placeholder=" " required>
               
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Date of Birth :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="date" class="form-control" id="dob"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Age :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="age"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
                <label for="inno" class="form-label">School:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id="school"placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
            </di>
<br>
</div>
              <div id="saved"></div>
              <hr class="my-4">
<button class="btn btn-primary btn-lg" onclick ="adddata()">ADD</button>

<br>
<br>
            <table class="table table-bordered table-striped">
              <!-- Table Headings -->
              <thead>
                  <!-- Table Heading 1st Row -->
                  <tr>
                      <!-- Table Heading Items -->
                      <th ><center>Name </center></th>
                      <th ><center>Age  </center> </th>
                      <th ><center>School </center></th>
                      <th ><center>options  </center>  </th>
                  </tr>
         
                 
              </thead>
              <!-- Table Body -->
              <tbody id="ttbl">
                  <!-- Table Body 1st Row. You can use this 1st row for loop -->
                       


                  <tr>
                     
                  
                     
                  </tr>   

              

                  </tbody>
          </table>

              
              <a href="eindex2.2.php" class="btn btn-primary btn-lg">PREVIOUS </a>
              <a href="eindex3.php" class="btn btn-primary btn-lg">NEXT </a>
       
      </div>
    </div>
  </div>
</main>
</div>

</body>
<script type="text/javascript">  
 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        window.location.reload()
       }
   })
}
</script>
</html>