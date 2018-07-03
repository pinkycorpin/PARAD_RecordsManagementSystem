<?php
include_once('../include/admin_include.inc.php');
include_once('../include/db.inc.php');
?>
   <form action="../include/logout.inc.php" method="POST">
     <button type="submit" name="submit" >logout</button>
   </form>
  <form action="../include/admin_user_name.inc.php"  method="post">
	 <strong>Enter New User Name:</strong><input type="text" name="new_username" placeholder="Enter new User Name" required="required" ><br>
	 <strong>Confirm New User Name:</strong><input type="text" name="confirm_username" placeholder="Confirm New User Name" required="required" ><br>
	 <strong>Enter your User Name:</strong><input type="text" name="User" placeholder="User Name" required="required" ><br>
     <strong>Enter your password:</strong><input type="password" name="Pass" placeholder="Password" required="required" ><br>
     <button type="submit" name="edit_username">Submit</button>
 </form>
      <form action="admin_home.php" method="post">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>