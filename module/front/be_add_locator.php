<?php
	$screen_id=$_POST['screen_id'];
	$locationtype=$_POST['locatortype'];
	$locatior=$_POST['locator'];
	$description=$_POST['description'];


	echo "_".$screen_id."_".$locationtype."_".$locatior."_".$description."_";



	//Truy van DB de kiem tra
if($locationtype == "Xpath"){
	echo " là xpath";
	$sql = "INSERT INTO `ct_locator` (`screen_id`, `id`, `locatorID`, `locatorXpath`, `description`) VALUES ('$screen_id', NULL, '_', '$locatior', 'description')";
		echo $sql;
} else {
		echo " là id";
		$sql = "INSERT INTO `ct_locator` (`screen_id`, `id`, `locatorID`, `locatorXpath`, `description`) VALUES ('$screen_id', NULL, '$locatior', '_', '$description')";
		echo $sql;
}
	//echo "sql: ".$sql;
	$rs=mysqli_query($link,$sql);
		//Chuyen den trang chu
		header('location:?mod=addlocator');


?>
