<?php
	$epic_name=$_POST['epic_name'];
	$epic_description=$_POST['description'];
	$platform=$_POST['platform'];

	echo " epic name: ".$epic_name;
	echo " epic description: ".$epic_description;

	echo " epic platform: ".$platform;

	//Truy van DB de kiem tra
	$sql = "INSERT INTO `ct_epic` (`epic_id`, `epic_name`, `platform`, `description`) VALUES (NULL, '$epic_name', '1', '$epic_description')";
	echo "sql: ".$sql;
	$rs=mysqli_query($link,$sql);

	$sql = "SELECT epic_id FROM ct_epic WHERE epic_name = '$epic_name'";

	echo "sql: ".$sql;
		$rs=mysqli_query($link,$sql);
		//	echo "rs: ".$rs;

	while($r=mysqli_fetch_assoc($rs))
			{
					echo "r: ".$r['epic_id'];
					$url = "location:?mod=addtestcase&epic_id=".$r['epic_id'];
				}



echo $url;
//	header('location:?mod=addtestcase&epicid='.$rs['epic_id']);


		//Chuyen den trang chu
		header($url);


?>
