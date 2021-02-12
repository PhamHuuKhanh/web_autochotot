<?php
echo "da den add step action";
	$action=$_POST['action'];
		$locator=$_POST['locator'];
			$data=$_POST['data'];
				$note=$_POST['note'];
					$testcase_id = $_GET['testcase_id'];
				echo "-->".$action."_".$locator."_".$data."_".$note."_".$testcase_id;


				if($testcase_id == "") // update to max testcaseid
				{
					$sql = 'select max(testcase_id) from ct_testcases';
					$rs=mysqli_query($link,$sql);
				while($r=mysqli_fetch_assoc($rs)){
					$testcase_id = $r['max(testcase_id)'];
				}}
echo "update into testcase id: ".$testcase_id;

// find max step_index
		$sql = "select max(step_index) from ct_step where testcase_id = ".$testcase_id;
		$rs=mysqli_query($link,$sql);
		while($r=mysqli_fetch_assoc($rs)){
		$maxstep_index = $r['max(step_index)'];
		}
echo "max step index la: ".$maxstep_index;
$nextstepindex = $maxstep_index + 1;
$sql_1 = "INSERT INTO `ct_step` (`testcase_id`, `step_id`, `step_index`, `action`, `locator`, `data`, `note`, `isRuned`,`isActive`) VALUES ('$testcase_id', NULL, '$nextstepindex', '$action', '$locator', '$data', '$note', 'new','1')";

echo "sql final ".$sql_1;

	mysqli_query($link,$sql_1);

$url = "location:?mod=addstep&testcase_id=".$testcase_id;
header($url);


	//Truy van DB de kiem tra
	//$sql = "INSERT INTO `ct_screen` (`epic_id`, `screen_id`, `screen_name`, `screen_description`) VALUES ('$epic_id', NULL, '$screenname', '$screen_note')";
//	echo "sql: ".$sql;
//	$rs=mysqli_query($link,$sql);
		//Chuyen den trang chu
		//	$url = "location:?mod=addstep&testcase_id=".$tc_id;
		//	header($url);


?>
