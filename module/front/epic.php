<?php 
$sql='SELECT * from ct_epic';
			$rs=mysqli_query($link,$sql);
			
			
?>
<p> </p>
<table align = "center" >
  <tr>
 
    <th>Epic name</th>
    <th>Description</th>
    <th>Total testcases</th>
    <th>Fail</th>
    <th>Percent</th>
   </tr >
   
    <?php 
	while($r=mysqli_fetch_assoc($rs))
			{
				
				
	?>

      
      <tr onclick="window.location='?mod=testcase&epic_id=<?php echo $r['epic_id']; ?>';">
        <td> <?php echo $r['epic_name']; ?></td>
        <td><?php echo $r['description']; ?></td>
        <td> chưa có giá trị</td>
        <td>chưa có giá trị</td>
        <td>chưa có giá trị</td>
      </tr>
     
         <?php }  ?>
  
</table>