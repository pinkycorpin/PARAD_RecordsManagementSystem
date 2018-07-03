<?php
include_once('../include/admin_include.inc.php');
include_once '../include/db.inc.php';

?>



<!DOCTYPE html>
<head>
	<title></title>
</head>

<?php
if(isset($_POST['s_k'])){
?>
<br>
<form action="../include/logout.inc.php" method="POST">
<button type="submit" name="submit" >logout</button>
</form>

<form action="../include/secret_key_edit" method="post">
	<strong>Enter Secret-Key:</strong><input type="password" name="old_key" placeholder="Enter secret-key" required="required"><br>
	<strong>Enter New Secret-Key:</strong><input type="password" name="new_key" placeholder="Enter New secret-key" required="required"><br>
	<strong>Confirm New Secret-Key:</strong><input type="password" name="confirm_key" placeholder="Confirm New secret-key"  required="required"><br>
	<strong>Enter your User Name:</strong><input type="text" name="User" placeholder="Enter User Name"  required="required"><br>
    <strong>Enter your password:</strong><input type="password" name="Pass" placeholder="Enter Password" required="required"><br>
    <button type="submit" name="edit_secret-key">Submit</button>
</form>
	<form action="admin_home.php"  method="post">
	<button type="submit" name="option">Go back without changing</button><br>
	</form>


<?php
}
?>