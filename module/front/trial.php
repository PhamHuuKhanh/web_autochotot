
<?php   include("module/front/addstep_showtestcaselist.php");  ?>

<div class="login">
  <div class="registrd">

  <form action="?mod=addstep_action&testcase_id=1" method="post" id="createstep">
<ul class="forms">
    <li class="txt">Locator<span class="req">*</span></li>
    <li>
      <select name="locator" id="locator">

        <?php
        $sql_locator='SELECT * from ct_locator';
        $rs_locator=mysqli_query($link,$sql_locator);

        while($locator=mysqli_fetch_assoc($rs_locator))
            {
        ?>

        <option value=<?php echo $locator['locatorID']; ?> > <?php echo $locator['description']; ?> </option>
      <?php } ?>
    </select>
    </li>


              </form>

            </div>
            </div>
