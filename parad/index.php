<?php
session_start();

if(isset($_SESSION['user_name']) || isset($_SESSION['user_admin'])){
  echo"you are already log-in ";
  header("Location= ../index.php?please-login");
  exit();
}

?>


<!DOCTYPE>
<html>
     <head>
     	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
     	<link rel="stylesheet" type="text/css" href="style/style.css">
     </head>

	   <body>
     <div class="form-group">
     <br>
        <center>
        <div class="border" style="box-shadow:0px 1px 2px 0px rgba(0,0,0,0.5);width:400px;height:540px;background-color:white;">
                <br><br><img src="images/DARLogo.png" class="img-fluid" alt="Responsive image"><br><br>
                <legend style="text-align:center;">Login</legend><br>
                <form class="form-group" action="include/login.inc.php" method="POST">
                    <input class="form-group" type="text" class="form-control"  name="username" style="text-align:center;font-size:15px;" required="required"/><br>
                    <input class="form-group" type="password" class="form-control" name="password" style="text-align:center;font-size:15px;" required="required"/><br>
                    <button class="btn btn-sm" style="background-color:rgb(0,62,62);color:white;" value="login" name='submit'>Login </button>
                </form>
                <center><a href="views/register.php">Register</a></center>
            </div> 
        </center>  
     </div>
    </body>
</html> 





