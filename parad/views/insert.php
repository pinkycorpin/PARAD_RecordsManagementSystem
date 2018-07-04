<?php
	include_once('../templates/header.php');
?>

	<div class="ui secondary pointing menu">
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
                    </div>
                </div>
            </div>
            <a class="ui item" href="../include/logout.inc.php">
              Logout
            </a>
        </div>
    </div>

    <div class="body" style="width:100%;height:auto;">

		<center>
		<div class="ui small form">
	  		<div class="ui small form" style="width:65%;margin:3%;">
	  		<h2>Add Case Information</h2>
			  <form class="ui tiny form" action="../include/insert_data_inc.php" method="POST">
			  	<div class="field" style="margin-top:3%;">
		            		<label style="float:left">Case ID:</label>
		            		<input type="text" name="case_id" required="required"/><br><br>
		            		<label style="float:left">Case Title</label>
		            		<input type="text" name="case_title" required="required"/><br><br>
		            		<label style="float:left">Case Number</label>
		            		<input type="text" name="case_number" required="required"/><br><br>
		            		<label style="float:left">Title Number</label>
		            		<input type="text" name="title_number" required="required"/><br><br>    
		            		<label style="float:left">Land Area</label>
		            		<input type="text" name="land_area" required="required"/><br><br>
		            		<label style="float:left">Land Owner</label>
		            		<input type="text" name="land_owner" required="required"/><br><br>
		            		<label style="float:left">Adjudicator</label>
		            		<input type="text" name="adjudicator" required="required"/><br><br>	     
		            		<label style="float:left">Status</label>
		            		<input type="text" name="status" required="required"/><br>	 		
		       	</div>

			  <center><br><button class="ui teal button" style="float:right;" type="submit" name="submit">submit</button><br></center>
			 </form>
			</form>
			</div>
		</div>
		</center>
	</div>

<?php
	include_once('../templates/footer.php');
?>