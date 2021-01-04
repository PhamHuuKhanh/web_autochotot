<?php
$sql='SELECT * from ct_epic order by epic_id desc';
			$rs=mysqli_query($link,$sql);

?>

<div class="login">
  <div class="registrd">
        <form action="?mod=addtestcase_action" method="post" id="login">
            <h3>Add Testcase</h3>

            <ul class="forms">
                <li class="txt">Epic <span class="req">*</span></li>
                <li>
                  <select name="epic_id" id="epic_id">

                    <?php
                      $epic_id=$_GET['epic_id'];
                      echo "epic_id ".$epic_id;
                    while($r=mysqli_fetch_assoc($rs))
                        {
                          if($epic_id != $r['epic_id']){
                    ?>
                    <option value="<?php echo $r['epic_id']?>"><?php echo $r['epic_name']?></option>

                  <?php } else { ?>

                    <option selected="selected" value="<?php echo $r['epic_id']?>"><?php echo $r['epic_name']?></option>

                  <?php } } ?>
                  </select>
                </li>
            </ul>


            <ul class="forms">
                <li class="txt">Testcase<span class="req">*</span></li>
                <li class="inputfield"><input type="text" name="testcase" class="bar" required ></li>
            </ul>

            <ul class="forms">
                <li class="txt">Expected <span class="req">*</span></li>
                <li class="inputfield"><input type="text" name="expected" class="bar" required ></li>
            </ul>

            <ul class="forms">
                <li class="txt">Note <span></span></li>
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
