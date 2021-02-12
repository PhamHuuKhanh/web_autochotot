<p> </p>
<table align = "center" >
  <tr>
    <th>Steps</th>
    <th>Action</th>
    <th>Locator	</th>
    <th>Data</th>
    <th>Note</th>
	 <th>isRun or Not</th>
    <th>isActive</th>

  </tr >

         <?php
   $id=$_GET['tc_id'];
   $sql='SELECT * from ct_step where `testcase_id` = '.$id.' order by step_index';
   //echo 'dang trong step: '.$sql;
			$rs=mysqli_query($link,$sql);

	while($r=mysqli_fetch_assoc($rs))
			{
   ?>

      <tr>
        <td><?php echo $r['step_index']; ?></td>
        <td><?php echo $r['action']; ?></td>
          <td><?php echo $r['locator']; ?></td>
           <td><?php echo $r['data']; ?></td>
            <td><?php echo $r['note']; ?></td>
			 <td><?php echo $r['isRuned']; ?></td>
       <td>

         <p>
                   <form method="post" action="<?php
                   if($r['isActive'] == 0){
                       $link13 = "?mod=be_isActive&value=1&step_id=".$r['step_id']."&tc_id=".$id;
                   } else {
                         $link13 = "?mod=be_isActive&value=0&step_id=".$r['step_id']."&tc_id=".$id;
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

      <?php } ?>


</table>
