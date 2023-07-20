<?php
 include "dbase.php";
$ds =$_POST["vals"];

$str1 ="INSERT into child(cname,dob,age,school)values('$ds[0]','$ds[1]',$ds[2],'$ds[3]')" ;

$rs1 =$bdd->query($str1) or die("error on $str1");
echo "Send data";
echo json_encode($ds);
?>