<?php
include_once('../include/admin_include.inc.php');
?>
<br><br>
<form action="../include/edit_password.inc.php"  method="post" >
	<strong>Enter New Password:</strong><input type="password" name="new_password" placeholder="Enter New Password" required="required"><br>
	<strong>Confirm New Password:</strong><input type="password" name="confirm_password" placeholder="Confirm New" required="required"><br>
	<strong>Enter your User Name:</strong><input type="text" name="User" placeholder="User Name" required="required" class="form-control"><br>
	<strong>Enter your Password:</strong><input type="password" name="password" placeholder="Password" required="required"><br>
    <button type="submit" name="edit_password">Submit</button>
	</form>
      <form action="admin_home.php"  method="post">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>