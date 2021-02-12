<?php
	$epic_id=$_POST['epic_id'];
	$screenname=$_POST['screenname'];
	$screen_note=$_POST['screen_note'];


	echo " epic id: ".$epic_id;
	echo " screenname: ".$screenname;
	echo " note: ".$screen_note;


	//Truy van DB de kiem tra
	$sql = "INSERT INTO `ct_screen` (`epic_id`, `screen_id`, `screen_name`, `screen_description`) VALUES ('$epic_id', NULL, '$screenname', '$screen_note')";
	echo "sql: ".$sql;
	$rs=mysqli_query($link,$sql);
		//Chuyen den trang chu
		header('location:?mod=addlocator');


?>
