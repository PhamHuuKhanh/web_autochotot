
<div class="login">
  <div class="registrd">
        <form action="?mod=load_step_action" method="post" id="createstep">
            <h3>Please select a testcase</h3>

            <ul class="forms">
                <li class="txt">Testcase<span class="req">*</span></li>
                <li>
                  <select name="tc_id" id="tc_id"  onchange="this.form.submit()">

                    <?php
										$sql='SELECT * from ct_epic order by epic_id desc';
										$rs=mysqli_query($link,$sql);

                    while($r=mysqli_fetch_assoc($rs))
                        {
                    ?>

										<optgroup label = <?php echo $r['epic_name']?> >

											<?php
											$epicid = $r['epic_id'];
											$sql2= "SELECT * from ct_testcases where epic_id = $epicid order by testcase_id desc ";
											echo "sql is: ".$sql;
														$rs2=mysqli_query($link,$sql2);
                            $testcase_id=$_GET['testcase_id'];  // get testcase id da chon truoc do.
											while($r2=mysqli_fetch_assoc($rs2))
													{
                            if($r2['testcase_id'] != $testcase_id) {
											?>

                    <option value="<?php echo $r2['testcase_id']?>"> <?php echo $r2['testcase']?> </option>
                  <?php } else { ?>
                    <option selected="selected" value="<?php

                    echo $r2['testcase_id'] ?>"> <?php echo $r2['testcase']?> </option>

                  <?php } } } ?>
								</select>
                </li>
            </ul>


          </form>

        </div>
        </div>
