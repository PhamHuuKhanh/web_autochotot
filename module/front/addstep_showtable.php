<table align = "center" width = 100% >
  <tr>
    <th>Step index</th>
    <th>Action</th>
     <th>Locator</th>
    <th>Data</th>
    <th>Note</th>
     <th>Update</th>
    <th>isActive</th>
   </tr >
   <?php
   // get max testcaseid
   $sql_tc_id_max = "SELECT max(testcase_id) from ct_testcases";
   $tc_id_max=mysqli_query($link,$sql_tc_id_max);
   //echo "sql".$sql_tc_id_max;
   while($tc_max=mysqli_fetch_assoc($tc_id_max))
       {
         $value_maxtc = $tc_max['max(testcase_id)'];
         //echo "max is: ".$value_maxtc;

       }

          $testcase_id=$_GET['testcase_id'];  // get testcase id da chon truoc do.
          if($testcase_id != 0)
          {
            $value_tc =$testcase_id;
          }else{
            $value_tc = $value_maxtc;
          }

   $sql3= "SELECT * from ct_step where testcase_id = $value_tc order by step_index ";
  //  echo "sql3 is: ".$sql3;
         $rs3=mysqli_query($link,$sql3);

   while($r3=mysqli_fetch_assoc($rs3))
       {
   ?>

      <tr>
        <td> <?php echo $r3['step_index'];?> </td>
        <td><?php echo $r3['action'];?></td>
        <td> <?php echo $r3['locator'];?> </td>
        <td> <?php echo $r3['data'];?></td>
        <td><?php echo $r3['note'];?></td>
        <td>
              <p>
                        <form method="post" action="<?php
                        $link13 = "?mod=updatestep_action&testcase_id=".$_GET['testcase_id']."&stepid=".$r3['step_id']."&stepindex=".$r3['step_index']."&action=up";
                        echo $link13;
                        ?>">
                            <button type="submit">-Up-</button>
                        </form>

                          <form method="post" action="<?php
                          $link = "?mod=updatestep_action&testcase_id=".$_GET['testcase_id']."&stepid=".$r3['step_id']."&stepindex=".$r3['step_index']."&action=down";
                          echo $link;
                          ?>">
                              <button type="submit">-Down-</button>
                          </form>


              </p>

        </td>

        <td>

          <p>

                    <?php
                          if($r3['isActive'] == 0){
                            echo "<button class=\"isactive0\">";
                            echo "Disable";
                          } else {
                            echo "<button class=\"isactive1\">";
                              echo "Enable";
                          }
                        }
                          ?>

                        </button>

          </p>


        </td>

      </tr>



</table>
