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
      <h2>Transfer Application (Southern Province)  </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>

    <div class="col-12">
    <!-- onchange="la(this.value)" -->
        <label for="inno" class="form-label">The officer is expected to transfer:</label>
        <select name="type" id="transfer"  class="form-control form-select" required>
          <option value="" disabled hidden selected>----Select---- </option>
          <option value="Provincial Government Service">Southern Provincial Government Service    </option>
          <option value="Central Government Service"> Central Government Service  </option>
          <option value="Provincial Government Service">Other Provincial Government Service    </option>
        </select>
        <div class="invalid-feedback">
       
          </div>
        </div>
      
        <div class="col-12">
            <br><p><u><h3>Southern Provincial Government Service</h3></u></p><br>
          <label for="inno" class="form-label">The Southern provincial council that is expected to transfer :</label>
          <select name="type" id="provincialcouncil" class="form-control form-select" required>
            <option value="" disabled hidden selected>----Select---- </option>
            
            <option value="Galle Municipal Council">Galle Municipal Council
            </option>
            <option value="Ambalangoda Municipal Council">Ambalangoda Municipal Council
            </option>
            <option value="Niagama Regional Council">Niagama Regional Council
            </option>
            <option value="Neluva Regional Council">Neluva Regional Council
            </option>
            <option value="Bentota Regional Council">Bentota Regional Council
            </option>
            <option value="Welivitiya Divithura Regional Council">Welivitiya Divithura Regional Council
            </option>
            <option value="Bope Podadala Regional Council">Bope Podadala Regional Council
            </option>
            <option value="Rajgama local council">Rajgama local council
            </option>
            <option value="Hikkaduwa City Council">Hikkaduwa City Council
            </option>
            <option value="Imaduwa Regional Council">Imaduwa Regional Council
            </option>
            <option value="Akmeemana Regional Council">Akmeemana Regional Council
            </option>
            <option value="Baddegama Regional Council">Baddegama Regional Council
            </option>
            <option value="Nagoda Regional Council">Nagoda Regional Council
            </option>
            <option value="Karandeniya Regional Council">Karandeniya Regional Council
            </option>
            <option value="Tavalama Pradeshiya Sabha">Tavalama Pradeshiya Sabha
            </option>
            <option value="Yakkalamulla Regional Council">Yakkalamulla Regional Council
            </option>
            <option value="Habaraduwa Regional Council">Habaraduwa Regional Council
            </option>
            <option value="Ambalangoda Regional Council">Ambalangoda Regional Council
            </option>
            <option value="Elpitiya Regional Council">Elpitiya Regional Council
            </option>
            <option value="Balapitiya Regional Council">Balapitiya Regional Council
            </option>
            <option value="Matara Municipal Council">Matara Municipal Council
            </option>
            <option value="Devinuwara Regional Council">Devinuwara Regional Council
            </option>
            <option value="Kotapola Regional Council">Kotapola Regional Council
            </option>
            <option value="Pitabeddara Pradeshiya Sabha">Pitabeddara Pradeshiya Sabha
            </option>
            <option value="Pasgoda Regional Council">Pasgoda Regional Council
            </option>

            <option value="Weligama Municipal Council">Weligama Municipal Council
            </option>
            <option value="Kirinda Puhulwella Regional Council">Kirinda Puhulwella Regional Council
            </option>
            <option value="Mullatiyana Regional Council">Mullatiyana Regional Council
            </option>
            <option value="Athuraliya Pradeshiya Sabha">Athuraliya Pradeshiya Sabha
            </option>
            <option value="Dickwella Regional Council">Dickwella Regional Council
            </option>
            <option value="Kamburupitiya Regional Council">Kamburupitiya Regional Council
            </option>
            <option value="Matara Regional Council">Matara Regional Council
            </option>
            <option value="Hakmana Regional Council">Hakmana Regional Council
            </option>
            <option value="Akuressa Regional Council">Akuressa Regional Council
            </option>
            <option value="Weligama local council">Weligama local council
            </option>

            <option value="Tihagoda Regional Council">Tihagoda Regional Council
            </option>
            <option value="Malimbada Regional Council">Malimbada Regional Council
            </option>
            <option value="Hambantota Maha nagara Sabha">Hambantota Maha nagara Sabha
            </option>
            <option value="Tangalle Municipal Council">Tangalle Municipal Council
            </option>
            <option value="Ambalantota Regional Council">Ambalantota Regional Council
            </option>
            <option value="Suriyawewa Regional Council">Suriyawewa Regional Council
            </option>
            <option value="Beliatta Regional Council">Beliatta Regional Council
            </option>
            <option value="Lunugamwehera Regional Council">Lunugamwehera Regional Council
            </option>
            <option value="Angunukolapalassa Regional Council">Angunukolapalassa Regional Council
            </option>
            <option value="Katuwana Regional Council">Katuwana Regional Council
            </option>
            <option value="Hambantota Regional Council">Hambantota Regional Council
            </option>
            <option value="Tissamaharama Regional Council">Tissamaharama Regional Council
            </option>
            <option value="Weerakatiya Regional Council">Weerakatiya Regional Council
            </option>
            <option value="Tangalle Regional Council">Tangalle Regional Council
            </option>
           
          </select>
          <div class="invalid-feedback">
         
            </div>
          </div>
        

        <div class="col-12">
            
          <label for="inno" class="form-label">Southern Provincial Ministry:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="ministry"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">Southern Provincial Department:</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="department"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="inno" class="form-label">Service station :</label>
          <div class="input-group has-validation">
            <!--<span class="input-group-text">@</span>-->
            <input type="text" class="form-control" id="serviceplace"placeholder=" " required>
          <div class="invalid-feedback">
         
            </div>
          </div>
        </div>
        
          <div class="col-12">
            <br> <p><u><h3>Central Government Service</h3></u> </p><br>
           <label for="inno" class="form-label">Ministry seeking transfer:</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="tministry"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
           <label for="inno" class="form-label">Department:</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="tdepartment"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
           <label for="inno" class="form-label">Service station :</label>
           <div class="input-group has-validation">
             <!--<span class="input-group-text">@</span>-->
             <input type="text" class="form-control" id="tserviceplace"placeholder=" " required>
           <div class="invalid-feedback">
          
             </div>
           </div>
         </div>

         <div class="col-12">
             <label for="inno" class="form-label">Reasons for requesting transfers :</label>
             <div class="input-group has-validation">
               <!--<span class="input-group-text">@</span>-->
               <input type="textbox" class="form-control" id="reason"placeholder=" " required>
             <div class="invalid-feedback">
            
               </div>
             </div>
              
              
            

           
       
             <br>
          <p style="text-align: right;">~Page 05~</p> 
    
          <div id="saved"></div>
          <hr class="my-4">
          <!-- <button class="w-100 btn btn-success btn-lg" onclick ="adddata()" >SAVE</button> -->
          <a href="eindex3.php" class="btn btn-primary btn-lg">PREVIOUS </a>
          <a href="index01.php" class="btn btn-primary btn-lg"onclick ="adddata()">FINISH </a>
          <!-- <button value="print" class="btn btn-primary btn-lg">PRINT</button> -->
      
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>

<script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
      <script type="text/javascript" src="myfun.js"> </script>
  </body>
  </body>

  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata5.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        window.location.reload()
       }
   })
}


  function la(src){
    window.location=src;
  }
</script>
  </body>

</html>
