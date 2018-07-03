<?php
	include_once('../templates/header.php');
?>
		<center>
		<div class="ui small form">
	  		<div class="ui small form" style="width:65%;margin:3%;">
	  		<h2>Add Case Information</h2>
	  		<form action="../include/logout.inc.php" method="POST"> 
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
			  </form>
			  <center><br><button class="ui teal button" style="float:right;" type="submit" name="submit">submit</button><br></center>
			</form>
			</div>
		</div>
	</center>

<?php
	include_once('../templates/footer.php');
?>