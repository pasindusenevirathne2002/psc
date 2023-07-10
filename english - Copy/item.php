<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>psc</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css?h=1f9e0951b46f853631f4c7a43326e9db">
<link rel="stylesheet" href="fonts/font-awesome.min.css?h=a24cb0112e51902b6b3ed4606a7cd727">
<link rel="stylesheet" href="css/styles.min.css?h=4ad9afcee13d2126334a3c065643d93c">
<link rel="stylesheet" href="DataTables/datatables.min.css">
<link rel="stylesheet" href="DataTables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css" />
</head>

<body style="background: rgba(237,231,231,0.65);color: var(--bs-dark);">
 <?php 
 include "dbase.php";
 include "sqlobj.php";
 $myobj =new sqlobj($bdd);

 // getline
 $str1="select * from ministry where mid=21";
 $i1 =$myobj->getlines($str1);
 echo "r1 is $i1 <br>";

 // firstrow
$str1="SELECT * FROM ministry " ;
$i2 =$myobj->firstrow($str1);
$newrf =$i2[0]+1;
echo $newrf;
 $mid=100  ;
;


 

 $str1 ="select mid,mname from ministry";
 echo $str1;
 $rs1 = $myobj->selectlist($str1,"mid");
 echo $rs1;

//  $str2="select mname from minisrty";echo $str2;
//  $rs2 = $myobj->datalist($str2,"mid");
//   echo $rs2;


 ?>

<div class="container">
  <main>
    <div class="py-2 text-center">
      <h2>Transfer Application </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
   
    <div class="col-12">
     
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="mname" class="form-label">Provincial Ministry: </label><br>
          <!-- <?php
 
 $myobj =new sqlobj($bdd);
 $str1 ="select mid,mname from ministry";
 echo $str1;
 $rs1 = $myobj->selectlist($str1,"mid");
 echo $rs1;?> -->

          <select name="type" id="type" class="form-control form-select" required>
            <option value="" disabled hidden selected>Select </option>
            <option value="0">Independent</option>
            <option value="1">Chief Ministry</option>
            <option value="2">Ministry of Education</option>
            <option value="3">Ministry of Agriculture </option>
            <option value="4">Ministry of Fisheries</option>
            <option value="5">Ministry of Sports</option>
            
        </select>
      <div class="invalid-feedback">
        
          </div>
        </div>

        <div class="col-sm-6">
          <label for="dname" class="form-label">Department:</label>
      <input type="text" class="form-control" id="dname" placeholder="" value="" required>
      <div class="invalid-feedback">
      
      </div>
        </div>


            <div class="col-12">
              <label for="inno" class="form-label">Full name of the officer:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">NIC Number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Duty Address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Personal address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Address of permanent residence:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Active phone number:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Phone number using Whatsapp:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="number" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="inno" class="form-label">Email address:</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="mail" class="form-control" id="inno"placeholder=" " required>
              <div class="invalid-feedback">
             
                </div>
              </div>
            </div>
           </div>
           </div>
    
          <div id="saved"></div>
          <hr class="my-4">

          <a href="index1.html" class="btn btn-primary btn-lg">NEXT </a>
      
          <input type="hidden" id="subno" value="0">
        </div>
      </div>
    </div>
  </main>
</div>

<script src="js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
<script src="bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
<script src="js/script.min.js?h=43583f9c06d57d8535a11a9e2f5a6a7c"></script>
<script src="DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
<script src="DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/Javascript">
$(document).ready(function(){
    showsel();
var vals =$(":input").map(function(){ return $(this).val();    }).get();
//var vals =$(':input').map(function(){ return $(this).val() }).get();
//alert(vals);
$("#save").click(function(){

$.ajax({
	type:'post',
	data:{icode:2},
	url:'showitem.php',
	success: function (json){   $('#formdata').html(json);      } 
})
})

/*
$("#save").click(function(){
alert("OKKK");
})
*/
})
function showsel(){
    $.ajax({
	type:'post',
	data:{icode:2},
	url:'showsel.php',
	success: function (json){   $('#formdata').html(json);      } 
})

}

</script>



</body>
</html>