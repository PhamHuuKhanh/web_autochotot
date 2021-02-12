

<?php   include("module/front/addstep_showtestcaselist.php");  ?>

<div class="login">
  <div class="registrd">

    <form action="<?php
    $linkhmoi = "?mod=be_add_step&testcase_id=".$_GET['testcase_id'];
    echo $linkhmoi;
    ?> " method="post" id="createstep">

            <h3>Add Step</h3>

            <ul class="forms">
                <li class="txt">Action <span class="req">*</span></li>
                <li>
                  <select name="action" id="action">
                    <?php
                     $sql3 = 'SELECT * from action_list order by action_id';
                     //echo "sql is: ".$sql3;
                    $rs3=mysqli_query($link,$sql3);
                    while($r = mysqli_fetch_assoc($rs3) ){

                      ?>
                           <option value="<?php echo $r['action'] ?>"><?php echo $r['action'] ?></option>

                         <?php } ?>

                  </select>
                </li>
            </ul>

            <ul class="forms">
                <li class="txt">Locator<span class="req">*</span></li>
                <li>
                  <select name="locator" id="locator">

                                        <?php
                    										$sql='SELECT * from ct_screen order by screen_id desc';
                    										$rs=mysqli_query($link,$sql);
                                        while($r=mysqli_fetch_assoc($rs))
                                            {
                                        ?>
                    										<optgroup label = <?php echo $r['screen_name']?> >

                    											<?php
                    											$screen_id = $r['screen_id'];
                    											$sql2= "SELECT * from ct_locator where screen_id = $screen_id order by id desc ";
                    											echo "sql is: ".$sql;
                                          echo"dasdadsa";
                    														$rs2=mysqli_query($link,$sql2);
                    											while($r2=mysqli_fetch_assoc($rs2)){
                    											?>

                                        <option value=<?php echo $r2['locatorID']?> > <?php echo $r2['description']?> </option>

                                      <?php } } ?>
                </select>
                </li>
            </ul>


            <ul class="forms">
                <li class="txt">Data<span></span></li>
                <li class="inputfield"><input type="text" name="data" class="bar" ></li>
            </ul>

            <ul class="forms">
                <li class="txt">Note<span></span></li>
                <li class="inputfield"><input type="text" name="note" class="bar" ></li>
            </ul>

            <ul class="forms">
                <li class="txt"></li>
                <li>
                   <button type="submit">Submit</button>
                </li>
            </ul>


          </form>

        </div>
        </div>

<?php   include("module/front/addstep_showtable.php");  ?>
