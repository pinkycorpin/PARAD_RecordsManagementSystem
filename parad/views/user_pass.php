<?php
include_once('../include/admin_include.inc.php');
?>
<br><br>
<form action="../include/user_pass.inc.php"  method="post" >
	<strong>Enter New User Name:</strong><input type="text" name="new_password" placeholder="Enter New User Name" required="required" class="form-control"><br>
	<strong>Enter New Password:</strong><input type="password" name="confirm_password" placeholder="Enter New Password" required="required" class="form-control"><br>
	<strong>Confirm New Password:</strong><input type="password" name="new_password" placeholder="Confirm New Password" required="required" class="form-control"><br>
	<strong>Enter User Name:</strong><input type="text" name="new_password" placeholder="Enter User Name" required="required" class="form-control"><br>
	<strong>Enter your Password:</strong><input type="password" name="password" placeholder="Password" required="required" class="form-control"><br>
    <button type="submit" name="user_pass">Submit</button>
	</form>
      <form action="admin_home.php"  method="post">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>