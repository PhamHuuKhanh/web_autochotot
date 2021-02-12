<?php
	$epic_id=$_GET['epic_id'];
	$tc_id=$_GET['tc_id'];
	$step_id=$_GET['step_id'];

	$value=$_GET['value'];


	echo "isActive: ".$epic_id."_ ".$tc_id."_ ".$step_id."_ ".$value."end.";

if(($epic_id !="")and($tc_id =="")and($step_id =="")){ // update Feature
 $sql = "UPDATE `ct_epic` SET `isActive`= '$value' WHERE epic_id = '$epic_id'";
 echo "sql update epic is: ".$sql;
$newurl = "location:?mod=epic";

}
echo "__epic--> ";
if(($epic_id !="")and($tc_id !="")and($step_id =="")){
	$sql = "UPDATE `ct_testcases` SET `isActive`= '$value' WHERE testcase_id = '$tc_id'";
	echo "sql update testcase is: ".$sql;
	$newurl = "location:?mod=testcase&epic_id=".$epic_id;
}
echo "__testcase--> ";
if(($epic_id =="")and($tc_id !="")and($step_id !="")){
	$sql = "UPDATE `ct_step` SET `isActive`= '$value' WHERE step_id = '$step_id'";
	echo "sql update step is: ".$sql;
		$newurl = "location:?mod=step&tc_id=".$tc_id;
}
echo "__step--> ";
mysqli_query($link,$sql);

echo $newurl;

		header($newurl);


?>
