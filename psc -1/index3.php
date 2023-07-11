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
      <h2>இடமாற்ற விண்ணப்பம் </h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>
 
    
    <div class="col-12">
      <p>சேவையில் இணைந்த திகதியிலிருந்து பண்யாற்றிய இடம், திணைகிகளம் மற்றும் அமைச்சி முன்னர் சேவையாற்றிய கால வரையறை மற்றும் தற்போது பணியாற்றும் காரியாலயம் முந்தைய சேவை மற்றும் தற்போதைய சேவை. </p><br>    

      <div class="row g-3">
        <div class="col-sm-6">
          <label for="" class="form-label">இருந்து : </label>
          <input type="date" class="form-control" id="" placeholder="">
      <div class="invalid-feedback">
      
          </div>
        </div>

        <div class="col-sm-6">
          <label for="" class="form-label">வரை : </label>
          <input type="date" class="form-control" id="" placeholder="">
      <div class="invalid-feedback">
       
      </div>
        </div>

            <div class="col-12">
              
              <label for="inno" class="form-label">மொத்த கால அளவு (ஆண்டுகள்/மாதங்கள்) :</label>
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
                  <label for="mname" class="form-label">பணிகள் துறை : </label>
                  <select name="type" id="type" class="form-control form-select" required>
                    <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                    <option value="">கல்வித்துறை</option>
                    <option value="">வீதி அபிவிருத்தி அதிகாரசபை</option>
                    <option value="">விவசாயத் திணைக்களம்</option>
                    <option value="">நீர்ப்பாசனந் திணைக்களம்</option>
                    <option value="">கூட்டுறவு அபிவிருத்தித் திணைக்களம் </option>
                    <option value="">விலங்கு உற்பத்தி மற்றும் சுகாதாரத் திணைக்களம்</option>
                    <option value="">கைதிதொழில் அபிவிருத்தித் திணைக்களம்</option>
                    <option value="">சமூக நலன், நன்னடத்தை மற்றும் குழந்தை பராமரிப்பு சேவைகள் திணைக்களம்</option>
                    <option value="">விடமைப்பு ஆணையாளர் திணைக்களம்</option>
                    <option value="">அளுநர் செயலகம்</option>
                    <option value="">மாகாண சபை</option>
                    <option value="">மாகாண அரச சேவை ஆணைக்குழு</option>
                    
                </select>
              <div class="invalid-feedback">
                
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="mname" class="form-label">எந்த அமைச்சின் கீழ்? : </label>
                  <select name="type" id="type" class="form-control form-select" required>
                    <option value="" disabled hidden selected>தேர்ந்தெடு </option>
                    <option value="0">ஒரு சுதந்திரமான</option>
            <option value="1">தலைமை அமைச்சு</option>
            <option value="2">கல்வி அமைச்சு </option>
            <option value="3">விவசாய அமைச்சு  </option>
            <option value="4">கடற்றொழில் அமைச்சு </option>
            <option value="5">விளையாட்டுத்துறை அமைச்சு </option>
                    
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
                                      <th ><center>இருந்து</center></th>
                                      <th ><center> வரை</center> </th>
                                      
                                      <th ><center>முழு நேரமும் </center></th>
                                      <th ><center> திணைகிகளம்</center>  </th>
                                      <th ><center>எந்ந அமைச்சின்</center>  </th>
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
    </div></div></div>
                <div id="saved"></div>
                <hr class="my-4">
                <a href="index2.php" class="btn btn-primary btn-lg">முந்தைய
                </a>
                <a href="index4.php" class="btn btn-primary btn-lg">அடுத்து </a>
         
        </div>
      </div>
    </div>
  </main>
</div>

  </body>

</html>
