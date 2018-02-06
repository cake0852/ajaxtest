<?php //echo form_open('account/ok')?>
<!--html>
<form method="POST" action="/test/index.php/account/delete">
<button type="submit" name="submit"  class="btn">Delete</button>
</form-->

<form method="POST" action="/test/index.php/account/update">
<button type="submit" onClick=action='/test/index.php/account/delete';>Delete</button>

<fieldset>
    <!-- echo form_open('account/ok')-->
    <legend>Update</legend>
    <label for="account">Account</label> 
    <input type="text" name="account" /><br />

    <label for="country">Country</label> 
    <input type="text" name="country" /><br />

    <br />

    <button type="submit" name="submit"  class="btn">Update</button>
    <button type="submit" onClick=action='/test/index.php/account/delete';>Delete</button>
    <!--button type="submit" name="submit1" class="btn1">修改</button-->
    <!--a href="<?=url('/sfsd')?>">OK</a-->
</fieldset>
</form>
</html>