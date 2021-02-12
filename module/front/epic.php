<?php
$sql='SELECT * from ct_epic order by isActive desc';
			$rs=mysqli_query($link,$sql);


?>
<p> </p>
<table align = "center" >
  <tr>

    <th>Feature name</th>
    <th>Description</th>
		  <th>PlatForm</th>
    <th>Total testcases</th>
    <th>Fail</th>
    <th>Percent</th>
		<th>isActive</th>
   </tr >

    <?php
	while($r=mysqli_fetch_assoc($rs))
			{


	?>


      <tr onclick="window.location='?mod=testcase&epic_id=<?php echo $r['epic_id']; ?>';">
        <td> <?php echo $r['epic_name']; ?></td>
        <td><?php echo $r['description']; ?></td>
				  <td><?php echo $r['platform']; ?></td>
        <td> chưa có giá trị</td>
        <td>chưa có giá trị</td>
        <td>chưa có giá trị</td>
				  <td>

						<p>
											<form method="post" action="<?php
											if($r['isActive'] == 0){
													$link13 = "?mod=be_isActive&value=1&epic_id=".$r['epic_id'];
											} else {
														$link13 = "?mod=be_isActive&value=0&epic_id=".$r['epic_id'];
											}
											echo $link13;
											?>">
											<?php
														if($r['isActive'] == 0){
															echo "<button type=\"submit\" class=\"isactive0\">";
															echo "Disable";
														} else {
															echo "<button type=\"submit\" class=\"isactive1\">";
																echo "Enable";
														}
														?>

													</button>
											</form>
						</p>


					</td>
      </tr>

         <?php }  ?>

</table>
