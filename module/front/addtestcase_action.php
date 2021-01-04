<?php
	$epic_id=$_POST['epic_id'];
	$testcase=$_POST['testcase'];
	$expected=$_POST['expected'];
	$result=$_POST['result'];
	$note=$_POST['note'];


	echo " testcase: ".$testcase;
	echo " note: ".$note;
		echo " note: ".$epic_id;

	$sql = "INSERT INTO `ct_testcases` (`epic_id`, `testcase_id`, `testcase`, `expected`, `result`, `note`) VALUES ('$epic_id', NULL, '$testcase', '$expected', 'New', '$note')";

	//Truy van DB de kiem tra
	//$sql = "INSERT INTO `ct_epic` (`epic_id`, `epic_name`, `platform`, `description`) VALUES (NULL, '$epic_name', '1', '$epic_description')";
	echo "sql: ".$sql;
	$rs=mysqli_query($link,$sql);

header('location:?mod=addtestcase');



?>
