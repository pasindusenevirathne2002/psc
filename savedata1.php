<?php
 include "dbase.php";
 $ds =$_POST["vals"];


$str1 ="INSERT INTO servicedetail ( sname, grade, sdate, sallery, media, adate, permenat, appointment,exam,ename,edate,eno,emark,idate,rnumber) VALUES ('$ds[0]','$ds[1]','$ds[2]',$ds[3],'$ds[4]','$ds[5]','$ds[6]','$ds[7]','$ds[8]','$ds[9]','$ds[10]','$ds[11]','$ds[12]','$ds[13]','$ds[14]')" ;

 $rs1 =$bdd->query($str1) or die("error on $str1");
 echo "Send data";
echo json_encode($ds);


?>