<?php
 include "dbase.php";
$ds =$_POST["vals"];


$str1 ="INSERT INTO servicedetail ( sname, grade, sdate, sallery, media, adate, permenat, appointment) VALUES ('$ds[0]','$ds[1]','$ds[2]',$ds[3],'$ds[4]','$ds[5]','$ds[6]','$ds[7]')" ;

 $rs1 =$bdd->query($str1) or die("error on $str1");
 echo "Send data";



?>