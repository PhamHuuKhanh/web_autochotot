<p> </p>
<table align = "center" >
  <tr>
 
    <th>Testcase</th>
    <th>Expected</th>
    <th>Result</th>
    <th>Note</th>  
   </tr >
   
    <?php 
  $id=$_GET['epic_id']; 
  echo 'dnag trong testcase: '.$id;
	$sql='SELECT * from ct_testcases where epic_id='.$id;
	echo $sql;
			$rs=mysqli_query($link,$sql);
			
			
	
	while($r=mysqli_fetch_assoc($rs))
			{
				
				
	?>

      
      <tr onclick="window.location='?mod=step&tc_id=<?php echo $r['testcase_id']; ?>';">
        <td> <?php echo $r['testcase']; ?></td>
        <td><?php echo $r['expected']; ?></td>
        <td><?php echo $r['result']; ?></td>
        <td><?php echo $r['note']; ?></td>
       
      </tr>
     
         <?php }  ?>
  
</table>