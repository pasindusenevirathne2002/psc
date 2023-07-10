<?php
 
class sqlobj{
var $sql ;
public function __construct($adocon)
    {
        $this->adocon = $adocon;
    }
  function getlines($sqltext)
    {
        $rs1 = $this->adocon->query($sqltext) or Die ("Error on $sqltext");
		return $rs1->rowCount();
    }

	 function firstrow($sqltext)
    {
        $rs1 = $this->adocon->query($sqltext) or Die ("Error on $sqltext");
		return $rs1->fetch();
    }
	function allrows($sqltext)
    {
        $rs1 = $this->adocon->query($sqltext);
		return $rs1->fetchAll();
    }
	function addobj($controls,$sqltext,$indexes){
     $result=$this->firstrow($sqltext);
	 $str1 ="<script type='text/javascript'>";
	 for($i1=0;$i1<count($controls);$i1++){
		 $in1= $result[$indexes[$i1]];
		$str1 .="$('#$controls[$i1]').val('$in1');";
		
	 }
	 $str1 .="</script>";
     return $str1;
	}
	function adddata($sqltext)
    {
        $rs1 = $this->adocon->query($sqltext)or Die ("Error on $sqltext");
		
    }
	 
	function maxacno($table,$pval ,$cfield){
		// table name , other field values , base field name 
	  $str1 = "show index from $table  where Key_name = 'PRIMARY' and Column_name <>'$cfield'";
	 
	  $str2 ="select $cfield from $table where $cfield <> '0' ";
	  if(count($pval)==$this->getlines($str1)) {
		   $rs1 = $this->adocon->query($str1) or Die ("Error on $str1");
		   $i1=0;
		 while($row1=$rs1->fetch()){
			 $str2 .="and $row1[4] ='$pval[$i1]' ";
			 $i1++;
		 }
		 $str2 .= "order by $cfield desc";
		 $rc=$this->firstrow($str2);
		$val1= intval($rc[0])+1;
	  }else { $val1 =-1; }
	 return $val1;
	  
	 
	}
	function showtable($sqltext){
	$rs1 = $this->adocon->query($sqltext) or Die ("Error on $str1");
	$strt ="<table width='100%' ><tr>";
	 
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		$strt .= "<th>" . $rs1->getColumnMeta($i1)['name'] ."</th>";
	}
	$strt .="</tr>";
	while($row1=$rs1->fetch()){
	$strt .="<tr>";
	
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		$strt .= "<td>" . $row1[$i1] ."</td>";
	}
	$strt .="</tr>";	
	}
	$strt .="</table>";
    return $strt; 	
		
	}
	function showtablebtn($sqltext , $valindexs,$button){
		// $sqltext  Query   ===  $valiindexes   query indexes for parameter of buttons  array(indexes)  ==== button  Buttons to click  arrary(["head"=>"head Name ","cback"=>"cbakname"])
	$rs1 = $this->adocon->query($sqltext) or Die ("Error on $sqltext");
	$strt ="<table ><tr>";
	 
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		$strt .= "<th>" . $rs1->getColumnMeta($i1)['name'] ."</th>";
	}
	$strt .="<td> Action </td></tr>";
	while($row1=$rs1->fetch()){
	$strt .="<tr>";
	$stval="";$k1=0;
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		$strt .= "<td>" . $row1[$i1] ."</td>";
		if ($valindexs[$k1]==$i1){ $stval .=$row1[$i1].":"; $k1++;}
	}
	//button 
	$bttext="";
	for($i1=0;$i1<count($button);$i1++){
		$head=$button[$i1]["head"];
		$cbak=$button[$i1]["cbak"];
		$id=$stval . $head;
		$bttext .= "<a href='#' id='$id' onclick='$cbak(this.id)'>$head </a>" ;
	}
	$strt .="<td>$bttext </td></tr>";	
	}
	$strt .="</table>";
    return $strt; 	
		
	}
	function selectlist($sqltest,$selid){
	//	$sqltest ==> Query $selid object id
	// field 0 is value   field 1 is text
     $rs1 = $this->adocon->query($sqltest) or Die ("Error on $sqltest");
	 	 
	  $str1 ="<script type='text/javascript'> $('#$selid').empty();";
	  while($row1=$rs1->fetch()){
	   //$str1 .="$('#$selid').append(". '"<option value='. ."' ".  '> $row1[1] </option>"'." );  " ;
	   $str1 .="$('#$selid').append(". '"<option value='. "'".$row1[0]."'>".$row1[1].'</option>");' ;
	   
		 //echo $str2; 
	  }
	  
	  
	 $str1 .="</script>";
     return $str1;	 
	}


function showdatatablebtn($sqltext ,$shindex ,  $valindexs,$button ,$tbleid){
	 
		// $sqltext  Query   ===  $shindex ==>indexes in show in tables 
		//$valiindexes   query indexes for parameter of buttons  array(indexes)  ==== button  Buttons to click  arrary(["head"=>"head Name ","cback"=>"calbakname"  ,"option"=>"filed Number : crieteria : &&/|| # ......])     ( "option"=>"5:>:0:&&#....")   
	  // $tableid = id of table 
	$rs1 = $this->adocon->query($sqltext) or Die ("Error on $sqltext");
	$strt ="<table id='$tbleid' class='table table-striped' style='width:100%'><thead><tr>";
    $j1=0;
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		if($shindex[$j1]==$i1){
		$strt .= "<th>" . $rs1->getColumnMeta($i1)['name'] ."</th>";
		$j1++;
		}
	}
	$strt .="<td> Action </td></tr></thead><tbody>";
	while($row1=$rs1->fetch()){
	$strt .="<tr>";
	$stval="";$k1=0;$j1=0;
	for($i1=0;$i1<$rs1->columnCount();$i1++){
		if($shindex[$j1]==$i1){
		$strt .= "<td>" . $row1[$i1] ."</td>";
		$j1++;
		}
		if ($valindexs[$k1]==$i1){ $stval .=$row1[$i1].":"; $k1++;}
	}
	//button 
	$bttext="";
	for($i1=0;$i1<count($button);$i1++){
		$head=$button[$i1]["head"];
		$cbak=$button[$i1]["cback"];
		$opt=$button[$i1]["option"];
		$id1=$stval.$i1;
		//$ts =array();
		$ext=false;
		if(strlen($opt)>2){
			$optmain=explode("#",$opt);
			for($i1=0;$i1<count($optmain);$i1++){
			$ox=explode(":",$optmain[$i1]);
			$ind=$ox[0];
			switch ($ox[1]){
			case "=":
			case "==": $ts=($row1[$ind] == $ox[2]); break;
			case ">":$ts=($row1[$ind]> $ox[2]); break;
			case ">=":$ts=($row1[$ind] >= $ox[2]); break;
			case "<":$ts=($row1[$ind] < $ox[2]); break;
			case "<=":$ts=($row1[$ind] <= $ox[2]); break;
			case "!":
			case "!=": $ts=($row1[$ind]!= $ox[2]); break;
				
			}
			
			 $ext =($ox[3]=="&")? ($ext && 	$ts) :($ext ||$ts);
			
			}
			//$ts=$row1[$ind] == $ox[2];
			if($ext) { $bttext .= "<a href='#' id='$id1'  onclick='$cbak(this.id)'>". $head ." </a> &nbsp;&nbsp;";   } 
			
	    }else {
			$bttext .= "<a href='#' id='$id1'  onclick='$cbak(this.id)'>". $head ." </a> &nbsp;&nbsp;";
		}
		//$bttext .=$head;
	}
	$strt .="<td>$bttext   </td></tr>";	
	}
	$strt .="</tbody></table>";

   $strt .="<script type='text/javascript'>$('#". $tbleid."').DataTable({
	   dom: 'Bfrtip',
	  ordering: 'false',
  buttons: [
        'copy', 'excel', 'pdf'
    ]
 
 }); </script>";

 //echo $str1;
 
 
    return $strt; 	
		
	}
	
	function edittable($table ,$valindexs ,$editvals){
		$sx =explode(":",$editvals);
		$str1 ="select * from $table where ";
		for($i1=0;$i1<count($valindexs)  ;$i1++){  
		   $str1 .= "$valindexs[$i1]='$sx[$i1]'";
		   if($i1 < count($valindexs)-1 ) { $str1 .="  and  ";}
		}
		echo $str1;
		$vals =$this->firstrow($str1);
		$str1 ="show fields from $table";
		$fields =$this->allrows($str1);
		$fval="<script type='text/javascript'>";
		$i1=0;
		foreach  ( $fields as $val1){
		$fval .="$('#$val1[0]').val('$vals[$i1]') ; ";
		$i1++;
			
		}
		$fval .="</script>";
		return $fval;
	}
	
	function valtotable($tblhead,$vals,$button){
		$sx =explode(":",$tblhead);
		$strt ="<table  class='table table-striped' style='width:100%'><thead><tr>";	
		foreach($sx as $vals2){
		$strt .= "<th>" . $vals2 ."</th>";
		}
	$strt .="<td> Action </td></tr></thead><tbody>";
	   $sx =explode("#",$vals);
	   foreach($sx as $vals3){
		   $sx2=explode(":",$vals3);
		  $strt .="<tr>";
		  
		   foreach($sx2 as $vals4){
			$strt .="<td> $vals4</td>" ;
		  
		  }
		  $strt .="<td>wi</td></tr>";
	   
	   }
	   $strt .="</tbody></table>";
	   return $strt;
	
	}
	 
	function datalist($sqltest,$selid){
	// field 0 is value   field 1 is text
     $rs1 = $this->adocon->query($sqltest) or Die ("Error on $sqltest");
	 	 
	  $str1 ="<script type='text/javascript'>  ";
	  while($row1=$rs1->fetch()){
	   //$str1 .="$('#$selid').append(". '"<option value='. ."' ".  '> $row1[1] </option>"'." );  " ;
	   $str1 .="$('#$selid').append(". '"<option >'.$row1[1].'</option>");' ;
	   
		 //echo $str2; 
	  }
	  
	  
	 $str1 .="</script>";
     return $str1;	 
	} 
}
?>