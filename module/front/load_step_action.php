<?php
	$tc_id=$_POST['tc_id'];



	echo " tc id: ".$tc_id;



	//Truy van DB de kiem tra
	//$sql = "INSERT INTO `ct_screen` (`epic_id`, `screen_id`, `screen_name`, `screen_description`) VALUES ('$epic_id', NULL, '$screenname', '$screen_note')";
//	echo "sql: ".$sql;
//	$rs=mysqli_query($link,$sql);
		//Chuyen den trang chu
		$url = "location:?mod=addstep&testcase_id=".$tc_id;
		header($url);


?>
