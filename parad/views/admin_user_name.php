<?php
include_once('../include/admin_include.inc.php');
include_once('../include/db.inc.php');
include_once('../templates/header.php');
?>

  <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/semantic.css">

  <div class="ui secondary pointing menu" style="width:100%;">
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
                        <a href="../include/logout.inc.php"">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <div class="body" style="width:100%;height:80%;">
    <center>
    <div class="ui small form">
        <div class="ui small form" style="width:30%;margin:3%;">
        <h2>Edit Username</h2>
          <div class="field" style="margin-top:3%;">
                <form action="../include/admin_user_name.inc.php"  method="post">
                  <strong style="float:left;">Enter New User Name:</strong><br>
                    <input type="text" name="new_username" required="required" ><br><br>
                  <strong style="float:left;">Confirm New User Name:</strong><br>
                    <input type="text" name="confirm_username" required=" required" ><br><br>
                  <strong style="float:left;">Enter your User Name:</strong><br>
                    <input type="text" name="User" required="required" ><br><br>
                  <strong style="float:left;">Enter your password:</strong><br>
                    <input type="password" name="Pass" required="required" ><br><br>
                  <button class="ui teal button" type="submit" name="edit_username" style="float:center;"> Save</button>
                </form>
          </div>
    </div>
    </center>
  </div>

<?php
  include_once('../templates/footer.php');
?>