<p> </p>
<table align = "center" >
  <tr>
    <th>Steps</th>
    <th>Action</th>
    <th>Locator	</th>
    <th>Data</th>
    <th>Note</th>
	 <th>isRun or Not</th>

  </tr >
  
         <?php 
   $id=$_GET['tc_id'];   
   $sql='SELECT * from ct_step where `testcase_id` = '.$id.' order by step_index';
   echo 'dang trong step: '.$sql;
			$rs=mysqli_query($link,$sql);
			
	while($r=mysqli_fetch_assoc($rs))
			{
   ?>
   
      <tr onclick="window.location='?mod=stepdetail&stepid=<?php echo $r[`step_id`];?>';">
        <td><?php echo $r['step_index']; ?></td>
        <td><?php echo $r['action']; ?></td>
          <td><?php echo $r['locator']; ?></td>
           <td><?php echo $r['data']; ?></td>
            <td><?php echo $r['note']; ?></td>
			 <td><?php echo $r['isRuned']; ?></td>
   
      </tr>
      
      <?php } ?>

  
</table>