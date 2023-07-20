<?php
 include "dbase.php";
$ds =$_POST["vals"];

$str1 ="INSERT into transfer(transfer,provincialcouncil,ministry,department,serviceplace,tminisrty,tdepartment,tserviceplace,reson)values('$ds[0]','$ds[1]','$ds[2]','$ds[3]','$ds[4]','$ds[5]','$ds[6]','$ds[7]','$ds[8]')" ;

$rs1 =$bdd->query($str1) or die("error on $str1");
echo "Send data";
echo json_encode($ds);
?>