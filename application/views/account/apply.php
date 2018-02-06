<?php //echo form_open('account/ok')?>
<form method="POST" action="/test/index.php/account/insert">
<fieldset>
    <!-- echo form_open('account/ok')-->
    <legend>申請資料</legend>
    <label for="account">Account</label> 
    <input type="text" name="account" /><br />

    <label for="country">Country</label> 
    <input type="text" name="country" /><br />

    <br />

    <button type="submit" name="submit"  class="btn">Apply</button>
    <!--button type="submit" name="submit1" class="btn1">修改</button-->
</fieldset>
</form>