<?php
 include "dbase.php";
 include "sqlobj.php";
 $myobj =new sqlobj($bdd);
 $str1 ="select mid,mname from ministry";
 echo $str1;
 $rs1 = $myobj->selectlist($str1,"mid");
 echo $rs1;

//  $str2="select mname from minisrty";echo $str2;
//  $rs2 = $myobj->datalist($str2,"mid");
//   echo $rs2;

?>