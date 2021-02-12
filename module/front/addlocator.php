
<div class="login">
  <div class="registrd">
        <form action="?mod=be_add_locator" method="post" id="login">
            <h3>Add Locator</h3>

            <ul class="forms">
                <li class="txt">Scren name <span class="req">*</span></li>
                <li>
                  <select name="screen_id" id="screen_id">

                    <?php
                    $sql='SELECT * from ct_screen order by screen_name';
                      $rs=mysqli_query($link,$sql);
                      $screen_name=$_GET['screen_name'];
                      echo "screen_name: ".$screen_name;
                    while($r=mysqli_fetch_assoc($rs))
                        {
                    ?>
                    <option value="<?php echo $r['screen_id']?>"><?php echo $r['screen_name']?></option>

                  <?php } ?>

                  </select>
                </li>
            </ul>


            <ul class="forms">
                <li class="txt">
                  <input type="radio" id="locatorID" name="locatortype" value="ID" checked>
                  <label for="male">Locator ID</label><br>
                </li>
                <li class="txt">
                  <input type="radio" id="locatorXpath" name="locatortype" value="Xpath">
                  <label for="female">Locator Xpath</label><br>
                </li>
            </ul>
            <ul class="forms">
                <li class="txt">Locator<span class="req">*</span></li>
                <li class="inputfield"><input type="text" name="locator" class="bar" required ></li>
            </ul>

            <ul class="forms">
                <li class="txt">Description<span class="req">*</span></li>
                <li class="inputfield"><input type="text" name="description" class="bar" required ></li>
            </ul>
            <ul class="forms">
                <li class="txt"></li>
                <li>
                   <button type="submit">Add Locator</button>
                </li>
            </ul>
        </form>
</div>

  <div class="registrd">

        <form action="?mod=be_add_screen" method="post" id="login">
            <h3>Add Screen</h3>

            <ul class="forms">
                <li class="txt">Epic <span class="req">*</span></li>
                <li>
                  <select name="epic_id" id="epic_id">

                    <?php
                    $sql='SELECT * from ct_epic order by epic_id desc';
                    			$rs=mysqli_query($link,$sql);
                      $epic_id=$_GET['epic_id'];
                      echo "epic_id ".$epic_id;
                    while($r=mysqli_fetch_assoc($rs))
                        {

                    ?>
                    <option value="<?php echo $r['epic_id']?>"><?php echo $r['epic_name']?></option>

                  <?php  } ?>
                  </select>
                </li>
            </ul>

            <ul class="forms">
                <li class="txt">Screen Name: <span class="req">*</span></li>
                <li class="inputfield"><input type="text" name="screenname" class="bar" required ></li>
            </ul>

            <ul class="forms">
                <li class="txt">Note <span></span></li>
                <li class="inputfield"><input type="text" name="screen_note" class="bar" ></li>
            </ul>

            <ul class="forms">
                <li class="txt"></li>
                <li>
                   <button type="submit">Add Screen</button>
                </li>
            </ul>
        </form>



    </div>

</div>
