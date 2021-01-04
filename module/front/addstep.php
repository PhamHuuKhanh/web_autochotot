<?php
$sql='SELECT * from ct_epic order by epic_id desc';
			$rs=mysqli_query($link,$sql);

?>

<div class="login">
  <div class="registrd">
        <form action="?mod=addstep_action" method="post" id="createstep">
            <h3>Add Steps</h3>

            <ul class="forms">
                <li class="txt">Epic <span class="req">*</span></li>
                <li>
                  <select name="epic_id" id="epic_id">

                    <?php
                      $epic_id=$_GET['epic_id'];
                      echo "epic_id ".$epic_id;
                    while($r=mysqli_fetch_assoc($rs))
                        {
                    ?>
                    <option value="<?php echo $r['epic_id']?>"><?php echo $r['epic_name']?></option>

                  <?php } ?>
                  </select>
                </li>
            </ul>

						<table align = "center" >
						  <tr>

						    <th>Step index</th>
						    <th>Action</th>
								 <th>Locator</th>
						    <th>Data</th>
						    <th>Note</th>
								 <th>Update</th>
						   </tr >

						      <tr onclick="window.location='?mod=testcase&epic_id=';">
						        <td> 1</td>
						        <td>2</td>
										  <td>3</td>
						        <td> chưa có giá trị</td>
						        <td>chưa có giá trị</td>
						        <td>
											<p>
											<form method="get" action="/page2">
											    <button type="submit">Lên</button>
											</form>

											<form method="get" action="/page2">
										    <button type="submit">Xuống</button>
												</form>
											</p>
										</td>
						      </tr>



						</table>



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
