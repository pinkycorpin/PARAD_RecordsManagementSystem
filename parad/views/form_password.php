<?php
include_once('../include/admin_include.inc.php');
include_once '../include/db.inc.php';
include_once('../templates/header.php');
?>

<div class="ui secondary pointing menu">
        <a class="item">
            Home
        </a>
        <a class="item"  href="../views/admin_home.php">
            View
        </a>
        <a class="item" href="insert.php">
            Insert
        </a>
        <a class="item">
            User
        </a>
        
        <div class="right menu">
          <div class="m">
                <div class="drop_cont">
                  <button class="dropbut"> <img src="../images/profile.png" style="width:80%;height:100%;"> </button>
                    <div class="drop_conts">
                        <a href="admin_user_name.php">Edit Username</a>
                        <a href="admin_key.php">Edit Secret Key</a>
                        <a href="form_password.php">Edit Password</a>
                        <a href="user_pass.php">Edit Username and password</a>
                    </div>
                </div>
            </div>

            <a class="ui item" href="../include/logout.inc.php">
              Logout
            </a>
        </div>
    </div>

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