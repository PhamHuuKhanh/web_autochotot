<p> </p>
<table align = "center" >
  <tr>

    <th>Testcase</th>
    <th>Expected</th>
    <th>Result</th>
    <th>Note</th>
    <th>isActive</th>
   </tr >

    <?php
  $id=$_GET['epic_id'];
//  echo 'dnag trong testcase: '.$id;
	$sql="SELECT * from ct_testcases where epic_id=".$id." order by isActive desc";
	//echo $sql;
			$rs=mysqli_query($link,$sql);



	while($r=mysqli_fetch_assoc($rs))
			{


	?>


      <tr onclick="window.location='?mod=step&tc_id=<?php echo $r['testcase_id']; ?>';">
        <td> <?php echo $r['testcase']; ?></td>
        <td><?php echo $r['expected']; ?></td>
        <td><?php echo $r['result']; ?></td>
        <td><?php echo $r['note']; ?></td>
        <td>

          <p>
                    <form method="post" action="<?php
                    if($r['isActive'] == 0){
                        $link13 = "?mod=be_isActive&value=1&epic_id=".$id."&tc_id=".$r['testcase_id'];
                    } else {
                          $link13 = "?mod=be_isActive&value=0&epic_id=".$id."&tc_id=".$r['testcase_id'];
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
