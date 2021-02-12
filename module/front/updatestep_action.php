<?php

$get_tc_id = $_GET['testcase_id'];
$get_step_id = $_GET['stepid'];
$get_step_index = $_GET['stepindex'];
$get_action = $_GET['action'];


	echo " tc id: ".$get_tc_id."_".$get_step_id."_".$get_step_index."_".$get_action;



if($get_action == 'up'){ // index down
	//	echo "upppppp";
	if($get_step_index > 1){
		// find stepid previous
		$sql_find = "SELECT step_id from ct_step where testcase_id = ".$get_tc_id." and step_index = ".($get_step_index -1);
		echo "sql_find stepid: ".$sql_find;
		$rs=mysqli_query($link,$sql_find);
		while($r=mysqli_fetch_assoc($rs))
	{
			$less_step_id = $r['step_id'];
			echo "value step id truoc:--> ".$less_step_id;
	}
	// fine index previous
	$sql_find = "SELECT step_index from ct_step where step_id = ".$less_step_id;
//	echo "sql--: ".$sql_find;
	$rs=mysqli_query($link,$sql_find);
	while($r=mysqli_fetch_assoc($rs))
{
		$less_step_index = $r['step_index'];
}

// reduce current index
// reduce index this step_id
$reduct_step_index = $get_step_index - 1;
$sql_update = "UPDATE `ct_step` SET `step_index`= '$reduct_step_index' WHERE step_id = '$get_step_id'";
echo "udpate giam: ".$sql_update;
mysqli_query($link,$sql_update);
	// increate previous step index

//	echo "less_step_id ".$less_step_id;
	//echo "less_step_index ".$less_step_index;
	$less_step_index = $less_step_index + 1;
	$sql_update = "UPDATE `ct_step` SET `step_index`= '$less_step_index' WHERE step_id = '$less_step_id'";
	echo "udpate: ".$sql_update;

mysqli_query($link,$sql_update);
} }


if($get_action == 'down'){ // index down
	//	find max index
			$sql_find = "SELECT max(step_index) from ct_step where testcase_id = ".$get_tc_id;
			$rs=mysqli_query($link,$sql_find);
			while($r=mysqli_fetch_assoc($rs))
		{
				$max_step_index = $r['max(step_index)'];
		}
		echo "max step in this testcase: ".$max_step_index;
	if($get_step_index < $max_step_index){


		// find value of next stepid
		$sql_find = "SELECT step_id from ct_step where testcase_id = ".$get_tc_id." and step_index = ".($get_step_index +1);
		echo "sql_find stepid: ".$sql_find;
		$rs=mysqli_query($link,$sql_find);
		while($r=mysqli_fetch_assoc($rs))
	{
			$next_step_id = $r['step_id'];
			echo "value step id next:--> ".$next_step_id;
	}
	// fine index previous
	$sql_find = "SELECT step_index from ct_step where step_id = ".$next_step_id;
//	echo "sql--: ".$sql_find;
	$rs=mysqli_query($link,$sql_find);
	while($r=mysqli_fetch_assoc($rs))
{
		$next_step_index = $r['step_index'];
}

echo "next_step_id ".$next_step_id;
echo "next_step_index ".$next_step_index;

// increate current index
// down next index
$reduct_next_step_index = $next_step_index - 1;
$sql_update = "UPDATE `ct_step` SET `step_index`= '$reduct_next_step_index' WHERE step_id = '$next_step_id'";
echo "udpate giam: ".$sql_update;
mysqli_query($link,$sql_update);
	// increate previous step index


	$increate_step_index = $get_step_index + 1;
	$sql_update = "UPDATE `ct_step` SET `step_index`= '$increate_step_index' WHERE step_id = '$get_step_id'";
	echo "udpate: ".$sql_update;

mysqli_query($link,$sql_update);
} }




	//Truy van DB de kiem tra
	//$sql = "INSERT INTO `ct_screen` (`epic_id`, `screen_id`, `screen_name`, `screen_description`) VALUES ('$epic_id', NULL, '$screenname', '$screen_note')";
//	echo "sql: ".$sql;
//	$rs=mysqli_query($link,$sql);
		//Chuyen den trang chu
		$url = "location:?mod=addstep&testcase_id=".$get_tc_id;
		header($url);


?>
