<?php
include_once('../include/admin_include.inc.php');
?>                
<head>
 	<link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>

<body>

    <button type="submit" name="submit" >logout</button>
    </form>
    <ul>
    <li><a href="insert.php">insert</a></li>
    <li><a href="admin_home.php">view</a></li>
    <ul>
	<div class="form-group">
		<center>
		    <div class="border" style="box-shadow:0px 1px 2px 0px rgba(0,0,0,0.5);width:500px;height:540px;background-color:white;">  
                 <form action="../include/logout.inc.php" method="POST">
	            		<form class="form-group" action="../include/insert_data_inc.php" method="POST">
	            		<center>
	            		<table style="width: 80%">
			    		<tr>
			    		<br>
	            		<td><label  class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Case ID &nbsp&nbsp</label></td><br>
	            		<td><input type="text" name="case_id" required="required"/></td>
	            	    </tr>
	            		<tr>
	            		<td><label  class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Case Title &nbsp&nbsp</label></td>
	            		<td><input type="text" name="case_title" required="required"/></td>
	            	    </tr>
	            	    <tr>
	            		<td><label  class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Case Number &nbsp&nbsp</label></td>
	            		<td><input type="text" name="case_number" required="required"/></td>
	            	    </tr>
	            	    <tr>
	            		<td><label  class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Title Number &nbsp&nbsp</label></td>
	            		<td><input type="text" name="title_number" required="required"/></td>
	            	    </tr>
	            	    <tr>
	            		<td><label class="form-group"  style="font-size:14px;margin-left:30px;float:right;">Land Area &nbsp&nbsp</label></td>
	            		<td><input type="text" name="land_area" required="required"/></td>
	            	    </tr>
	            	    <tr>
	            		<td><label lass="form-group"  style="font-size:14px;margin-left:30px;float:right;">Land Owner &nbsp&nbsp</label></td>
	            		<td><input type="text" name="land_owner" required="required"/></td>
	            	    </tr>
	            	    <tr>
	            		<td><label lass="form-group"  style="font-size:14px;margin-left:30px;float:right;">Adjudicator &nbsp&nbsp</label></td>
	            		<td><input type="text" name="adjudicator" required="required"/></td>
	            		</tr>
	            		<tr>	     
	            		<td><label lass="form-group"  style="font-size:14px;margin-left:30px;float:right;">Status &nbsp&nbsp</label></td>
	            		<td><input type="text" name="status" required="required"/></td>	</tr>
	            	</table>
	               </center>
	               <br>
	            		<center ><button type="submit" name="submit">submit</button><br></center>
	            	    </form>
	            	</form>
	            </div>
	        </center>
	    </div>
	</ul>
</ul>
</body>
