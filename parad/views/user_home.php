<?php
include_once('../include/user_include.inc.php');
include_once('../include/db.inc.php');
?>                
                  <form action="../include/logout.inc.php" method="POST">
                  <button type="submit" name="submit" >logout</button>
                 </form>
                 <?php include_once('../include/user_view.inc.php');?>