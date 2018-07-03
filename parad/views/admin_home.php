<?php
include_once('../include/admin_include.inc.php');
include_once('../include/db.inc.php');
?> 

                 <form action="admin_user_name.php" method="POST">
                    <button>Edit UserName</button>
                 </form>
                 <form action="admin_key.php" method="POST">
                    <button name="s_k">edit Secret Key</button>
                 </form>
                 <form action="form_password.php" method="post">
                 	<button>Edit password</button>
                 </form>
                 <form action="user_pass.php" method="post">
                 	<button>Edit User Name and Password</button>
                 </form>
                 <form action="../include/logout.inc.php" method="POST">
                 	<button type="submit" name="submit" >logout</button>
                 </form>

                 <ul>
                 <li><a href="insert.php">insert</a></li>
                 <li><a href="../include/search_information.inc.php">view</a></li>
                 <ul>
                 	
                 <?php include_once('../include/user_view.inc.php');?>



