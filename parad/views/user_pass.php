<?php
include_once('../include/admin_include.inc.php');
?>

<?php
	include_once('../templates/header.php');
?>

	<div class="ui secondary pointing menu" style="width:100%;">
        <a class="item">
            Home
        </a>
        <a class="item"  href="../views/admin_home.php">
            View
        </a>
        <a class="active item" href="insert.php">
            Insert
        </a>
        <a class="item">
            User
        </a>
        
        <div class="right menu">
            <div class="m">
                <div class="drop_cont">
                    <button class="dropbut"> <img src="../images/profile.png" style="width:80%;height:100%;margin-top:-10%;"> </button>
                    <div class="drop_conts">
                        <a href="admin_user_name.php">Edit Username</a>
                        <a href="admin_key.php">Edit Secret Key</a>
                        <a href="form_password.php">Edit Password</a>
                        <a href="user_pass.php">Edit Username and password</a>
                        <a href="../include/logout.inc.php">
			              Logout
			            </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="body" style="width:100%;height:auto;">

		<center>
		<div class="ui small form">
		  <div class="two fields" style="width:60%;">
		    <div class="field">
			    <br><label style="font-size:25px;font-family:'Century Gothic', sans-serif;">Username</label><br><br>
			    <form action="../include/user_pass.inc.php"  method="post" >
				    <strong style="float:left">Enter User Name:</strong>
					<input type="text" name="new_password" placeholder="Enter User Name" required="required" class="form-control"><br>
			    	<strong style="float:left">Enter New User Name:</strong>
					<input type="text" name="new_password" placeholder="Enter New User Name" required="required" class="form-control"><br>
					<br>
			    	
				</form>
		    </div>
		    <div class="field">
		    	<br><label style="font-size:25px;font-family:'Century Gothic', sans-serif;">Password</label><br><br>
		    	<form action="../include/user_pass.inc.php"  method="post" >
			      	<strong style="float:left">Enter your Password:</strong>
					<input type="password" name="password" placeholder="Password" required="required" class="form-control"><br>
				    <strong style="float:left">Enter New Password:</strong>
					<input type="password" name="confirm_password" placeholder="Enter New Password" required="required" class="form-control"><br>
					<strong style="float:left">Confirm New Password:</strong>
					<input type="password" name="new_password" placeholder="Confirm New Password" required="required" class="form-control"><br>
		  	<br><button type="submit" name="user_pass">Submit</button>
					
				</form>
		    </div>

		  </div>
		  	<form action="admin_home.php"  method="post">
				<br><button type="submit" name="option">Go back without changing</button><br>
			</form>
			
		</div>
		</center>
	</div>
<br><br>
	
	      