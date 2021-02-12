<table align = "center" width = 100% >
  <tr>
    <th>Screen</th>
    <th>Locator - ID</th>
    <th>Locator - Xpath</th>
    <th>Description</th>
   </tr >

   <?php
   // get max testcaseid
   $sql = "SELECT * FROM `ct_screen`";
   $tcs = mysqli_query($link,$sql);
  // echo "sql: ".$sql;
   while($tc = mysqli_fetch_assoc($tcs))
       {
         $homeid = $tc['screen_id'];
        // echo "screen id: ".$homeid;
         $sql_locator = "SELECT * FROM `ct_locator` where screen_id = $homeid ";
         $tcs_locator = mysqli_query($link,$sql_locator);
        // echo "sql locator: ".$sql_locator;
         // count row
         $sql_countlocator = "SELECT count(*) FROM `ct_locator` where screen_id = $homeid ";
         $tcs_countlocator = mysqli_query($link,$sql_countlocator);
          while($tc_countlocator = mysqli_fetch_assoc($tcs_countlocator))
          {
            $countlocator = $$tc_countlocator['count(*)'];
          }
         // end count row
         $ScreenShow = 0;
         while($tc_locator = mysqli_fetch_assoc($tcs_locator))
             {

   ?>

      <tr>
        <td><?php if($ScreenShow == 0){
          echo $tc['screen_name']." - ".$tc['screen_description'];
            $ScreenShow = 1; // not print screen name.
        }
        ?></td>

        <td> <?php echo $tc_locator['locatorID'];?> </td>
          <td> <?php echo $tc_locator['locatorXpath'];?> </td>
        <td> <?php echo $tc_locator['description'];?> </td>

      </tr>

<?php }  }?>


</table>
