                <div class="login">
                	<div class="registrd">
                        <form action="?mod=be_add_epic" method="post" id="login">
                            <h3>Add Feature</h3>

                            <ul class="forms">
                                <li class="txt">Feature Name<span class="req">*</span></li>
                                <li class="inputfield"><input type="text" name="epic_name" class="bar" required ></li>
                            </ul>

                            <ul class="forms">
                                <li class="txt">Description <span class="req">*</span></li>
                                <li class="inputfield"><input type="text" name="description" class="bar" required ></li>
                            </ul>

                            <ul class="forms">
                                <li class="txt">Platform <span class="req">*</span></li>
                                <li>
                                  <select name="platformname" id="platform">
                                    <option value="1">Android</option>
                                    <option value="2">iOS</option>
                                    <option value="3">Website</option>

                                  </select>
                                </li>
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
