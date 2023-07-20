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
      <h2>Transfer Application (Southern Province) </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
    <div class="col-12">
      <p><h4><center><u>Acquired language skills</u></center></h4></p>
      

      <div class="row g-3">
        <div class="col-sm-6">
            <label for="ol" class="form-label">Sinhala :</label>
            <select name="type" id="sinhala" class="form-control form-select" required>
            <option value="" disabled hidden selected>----Select---- </option>
            <option value="i level">i level </option>
            <option value="ii level">ii level</option>
            <option value="iii level">iii level</option>
          </select>
        <div class="invalid-feedback">
         
        </div>
          </div>

        <div class="col-sm-6">
          <label for="ol" class="form-label">Tamil:</label>
          <select name="type" id="tamil" class="form-control form-select" required>
          <option value="" disabled hidden selected>----Select----  </option>
          <option value="i level">i level </option>
            <option value="ii level">ii level</option>
            <option value="iii level">iii level</option>
        </select>
      <div class="invalid-feedback">
       
      </div>
        </div>

        <div class="col-12">
        <label for="inno" class="form-label">English :</label>
        <select name="type" id="english" class="form-control form-select" required>
          <option value="" disabled hidden selected>----Select----  </option>
          <option value="Very good">Very good  </option>
          <option value="Good">Good  </option>
          <option value="Good">Normal </option>
          <option value="Weak">Weak  </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>
 
    <div class="col-12">
      <p><h4><center><u>Marrege Status</u></center></h4></p>
        <label for="ol" class="form-label">Is the officer married??:</label>
        <!-- onchange="la(this.value)" -->
        <select name="type" id="marrege" class="form-control form-select" required>
        <option value="" disabled hidden selected>----Select---- </option>
        <option value="Yes">Yes </option>
        <option value="No">No </option>
      </select>
    <div class="invalid-feedback">
     
    </div>
      </div>
    </div>
    <div class="col-12">
    <!-- <p><h4><center>Marrege Status</center></h4></p> -->
              <label for="inno" class="form-label">Spouse's Name:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="mname"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Address of place of work if spouse is employed:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="waddress"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Permanent residence address of the spouse:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="saddress"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

         
            <div class="col-12">
                <label for="ol" class="form-label">Whether spouse is employed in the armed forces or the police force?:</label>
                <!-- onchange="la(this.value)"   -->
                <select name="type" id="force" class="form-control form-select" required>
                <option value="" disabled hidden selected>----Select---- </option>
                <option value="Yes ">Yes </option>
                <option value="No">No </option>
              </select>
            <div class="invalid-feedback">
            </div>
            </div>   
            <div class="col-12">
                <label for="inno" class="form-label">Belonging service:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id="service"placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="inno" class="form-label">position:</label>
                <div class="input-group has-validation">
                  <!--<span class="input-group-text">@</span>-->
                  <input type="text" class="form-control" id="position"placeholder=" " required>
                <div class="invalid-feedback">
               
                  </div>
                </div>
              </div>
              <div class="col-12">
                <label for="ol" class="form-label">Have children?:</label>
                <!-- onchange="la(this.value)" -->
                <select name="type" id="child"  class="form-control form-select" required>
                <option value="" disabled hidden selected>----Select---- </option>
                <option value="Yes ">Yes </option>
                <option value="No">No </option>
              </select>
            <div class="invalid-feedback">
            </div>
             
<h4><center><u>Children Details</u></center></h4>



           
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
                <input type="number" class="form-control" id="age"placeholder=" " required>
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
            
<br>

             
<button  class="w-100 btn btn-success btn-lg" onclick ="adddata1()">ADD</button>

<br>
<br>
            <table class="table table-bordered table-striped">
              <!-- Table Headings -->
              <thead>
                  <!-- Table Heading 1st Row -->
                  <tr>
                      <!-- Table Heading Items -->
                      <th ><center>No </center></th>
                      <th ><center>Name </center></th>
                      <th ><center>Date of Birth </center></th>
                      <th ><center>Age  </center> </th>
                      <th ><center>School </center></th>
                      
                  </tr>
         
                 
              </thead>
              <!-- Table Body -->
              <tbody id="ttbl">
                  <!-- Table Body 1st Row. You can use this 1st row for loop -->
                  <?php
                            $str1="SELECT * from child";
                            $rs1=$bdd->query($str1) or die ("Error");
                 
                            while ($row1=$rs1->fetch()){
                              $edit = "edit:$row1[0]";
                              $del = "del:$row1[0]";
                      ?>                              


                        <tr>
                            <td><center><?php echo $row1[0] ?></center></td>
                            <td><center><?php echo $row1[1] ?></center></td>
                            <td><center><?php echo $row1[2] ?></center></td>
                            <td><center><?php echo $row1[3] ?></center></td>
                            <td><center><?php echo $row1[4] ?></center></td>
                          
                                  

                        </tr>
                        <?php } ?>

                  </tbody>
          </table>
<br>
          <p style="text-align: right;">~Page 03~</p>    
    
                <div id="saved"></div>
                <hr class="my-4">

                <!-- <button  class=" btn btn-primary btn-lg" onclick ="adddata()">save</button> -->

                <a href="eindex1.php" class="btn btn-primary btn-lg">PREVIOUS </a>
                <a href="eindex3.php" class="btn btn-primary btn-lg" onclick ="adddata()" >NEXT </a>
         
        </div>
      </div>
    </div>
    
  </main>
</div>
<script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
      <script type="text/javascript" src="myfun.js"> </script>
  </body>


  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata3.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
         //window.location.reload()
       }
   })
}

function adddata1(){
  var d1 =currval();
  $.ajax({
     url:'savedata4.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        //window.location.reload()
       }
   })
}

  function la(src){
    window.location=src;
  }
</script>
</html>
