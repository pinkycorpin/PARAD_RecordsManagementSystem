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
                        <a href="../include/logout.inc.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
?>
	 <div class="body" style="width:100%;height:80%;">
    <center>
    <div class="ui small form">
        <div class="ui small form" style="width:30%;margin:3%;">
	        <h2>EDIT SECRET KEY</h2>
				<form class="ui tiny form" action="../include/secret_key_edit.php" method="post">
					<strong style="float: left">Enter Secret-Key:</strong>
						<input type="password" name="old_key" required="required"><br><br>
					<strong style="float: left">Enter New Secret-Key:</strong>
						<input type="password" name="new_key" required="required"><br><br>
					<strong style="float: left">Confirm New Secret-Key:</strong>
						<input type="password" name="confirm_key" required="required"><br><br>
					<strong style="float: left">Enter your User Name:</strong>
						<input type="text" name="User" required="required"><br><br>
				    <strong style="float: left">Enter your password:</strong>
				    	<input type="password" name="Pass" required="required"><br><br>
			        <button class="ui teal button" type="submit" name="edit_secret-key" style="float:center"> Save</button>
	     	</form>
     	</div>
    </div>
    </center>
  </div>


<?php
  include_once('../templates/footer.php');
?>