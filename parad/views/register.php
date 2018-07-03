<?php
include_once('../include/user_currently_login.inc.php');
?>                
    
<head>
 	<link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>
	<div class="form-group">
		<center>
			<br>
		    <div class="border" style="box-shadow:0px 1px 2px 0px rgba(0,0,0,0.5);width:500px;height:540px;background-color:white;">
		    <form class="form-group" class="register" action="../include/register.inc.php" method="POST">
			    <br>
				<legend>Sign Up</legend><br>
			    <center>
			    	<table style="width: 80%">
			    		<tr>
					      	<td><label class="form-group"  style="font-size:14px;margin-left:30px;float:right;">First Name &nbsp&nbsp</label></td>
					      	<td><input class="form-group"  type="text" name="user_first" required="required"/></td>
					     </tr>
					     <tr>
					      	<td><label class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Last Name &nbsp&nbsp</label></td>
					      	<td><input class="form-group"  type="text" name="user_last" required="required"/></td>
					     </tr>
					     <tr>
					      	<td><label class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Username &nbsp&nbsp</label></td>
					      	<td><input class="form-group"  typ e="text" name="username" required="required"/></td>
					     </tr>
					     <tr>
					      	<td><label class="form-group"  style="font-size:14px;float:right;">Secret-Key &nbsp&nbsp</label></td>
			    			<td><input class="form-group"  type="password" name="key" required="required"/></td>
			    		</tr>
			    		<tr>
					      	<td><label class="form-group"  style="font-size:14px;float:right;">Create Password &nbsp&nbsp</label></td>
			    			<td><input class="form-group"  type="password" name="password" requir"ed="required"/></td>
			    		</tr>
			    		<tr>
					      	<td><label class="form-group"  style="font-size:14px;float:right;">Confirm-Password &nbsp&nbsp</label></td>
			    			<td><input class="form-group" type="password" name="confirm" requir"ed="required"/></td>
	    			    </tr>
	    			</table>
	    		</center>
			    <center>
			    	<br>
			    	<button class="btn btn-sm" style="background-color:rgb(0,62,62);color:white;" type="submit" name="submit">submit</button><br>
			    </center>
			</form>
			</div>
		</center>
	</div>

</body>