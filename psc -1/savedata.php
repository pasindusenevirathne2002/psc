<?php
 include "dbase.php";
$ds =$_POST["vals"];

$str1 ="INSERT into officerdetail(ministry,department,officername,nic,daddress,address,paddress,telno,wtelno,email)values('$ds[0]','$ds[1]','$ds[2]',$ds[3],'$ds[4]','$ds[5]','$ds[6]',$ds[7],$ds[8],'$ds[9]')" ;

$rs1 =$bdd->query($str1) or die("error on $str1");
echo "Send data";

?>