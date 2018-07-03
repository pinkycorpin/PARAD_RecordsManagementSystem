<?php
include_once('../include/admin_include.inc.php');
include_once '../../includes/dbh.inc.php';

?>



<!DOCTYPE html>
<head>
	<title></title>

  <style type="text/css">
   a{
   	text-decoration: none;
   }
  </style>
  <link href="../../css/holder.css" type="text/css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<table  class='table table-striped table-hover'><tr>


<td>
<button class="form-control" style="visibility:hidden;"/><br>
<button class="form-control" style="visibility:hidden; width:20%; "/><br>
</td>



<td>
<?php
                   if(isset($_POST['success'])){
                             echo "
                             <br><br><br>
                             <center>
                             <div class='alert alert-success' style='width:20%'>
                             <strong>Success !</strong>
                             </div></center>'
                             <form action='known.php' method='POST'>
                             <center><button class='form-control' name='create_user' style='width:20%'>Okey</button></center>
                             </form>
                    
                          ";
                       }

?>


<?php
if(isset($_POST['s_k'])){
?>
<br>
<form action="../../includes/known.inc.php" method="post" style="width:60%;">
	<strong>Enter Secret-Key:</strong><input type="password" name="old_key" placeholder="Enter secret-key" required="required" class="form-control"><br>
	<strong>Enter New Secret-Key:</strong><input type="password" name="new_key" placeholder="Enter New secret-key" required="required" class="form-control"><br>
	<strong>Confirm New Secret-Key:</strong><input type="password" name="confirm_key" placeholder="Confirm New secret-key"  required="required"class="form-control"><br>
	<strong>Enter your User Name:</strong><input type="text" name="User" placeholder="Enter User Name"  required="required" class="form-control"><br>
    <strong>Enter your password:</strong><input type="password" name="Pass" placeholder="Enter Password" required="required" class="form-control"><br>
    <button type="submit" name="edit_secret-key">Submit</button>

	</form>

	 <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>


<?php
}
else if(isset($_POST['userName'])){

?>
<br><br>

<form action="../../includes/known.inc.php"  method="post" style="width:60%;">
	<strong>Enter New User Name:</strong><input type="text" name="new_username" placeholder="Enter new User Name" required="required" class="form-control"><br>
	<strong>Confirm New User Name:</strong><input type="text" name="confirm_username" placeholder="Confirm New User Name" required="required" class="form-control"><br>
	<strong>Enter your User Name:</strong><input type="text" name="User" placeholder="User Name" required="required" class="form-control"><br>
    <strong>Enter your password:</strong><input type="password" name="Pass" placeholder="Password" required="required" class="form-control"><br>
    <button type="submit" name="edit_username">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;

	</form>
      <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>

<?php

}
else if(isset($_POST['password'])){
?>

<br><br>
<form action="../../includes/known.inc.php"  method="post" style="width:60%;" >
	<strong>Enter New Password:</strong><input type="password" name="new_password" placeholder="Enter New Password" required="required" class="form-control">
	<strong>Confirm New Password:</strong><input type="password" name="confirm_password" placeholder="Confirm New" required="required" Password" class="form-control">
	<strong>Enter your User Name:</strong><input type="text" name="User" placeholder="User Name" required="required" class="form-control"><br>
	<strong>Enter your Password:</strong><input type="password" name="password" placeholder="Password" required="required" class="form-control"><br>
    <button type="submit" name="edit_password">Submit</button>
	</form>
      <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>


<?php

}
else if(isset($_POST['all'])){
?>
<form action="../../includes/known.inc.php"  method="post" style="width:60%;" >

	Enter New User Name:<input type="text" name="new_password" placeholder="Enter New User Name" required="required" class="form-control"><br>
	Enter New Password:<input type="password" name="confirm_password" placeholder="Enter New Password" required="required" class="form-control"><br>
	Confirm New Password:<input type="password" name="new_password" placeholder="Confirm New Password" required="required" class="form-control"><br>

	Enter New Secret-Key:<input type="password" name="new_password" placeholder="Enter New Secret-Key" required="required" class="form-control"><br>
	Confirm New Secret-Key:<input type="password" name="new_password" placeholder="Confirm New Secret-key" required="required" class="form-control"><br>



	Enter User Name:<input type="text" name="new_password" placeholder="Enter User Name" required="required" class="form-control"><br>
	Enter Secret-Key:<input type="password" name="confirm_password" placeholder="Enter Secret-key" required="required" class="form-control"><br>
	Enter your Password:<input type="password" name="password" placeholder="Password"  required="required" class="form-control"><br>
    <button type="submit" name="all">Submit</button>

	</form>

      <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	 <button type="submit" name="option">Go back without changing</button><br>
	</form>



<?php

}
else if(isset($_POST['create_user'])){
?>

    <form action="../../includes/known.inc.php"  method="post" style="width:60%;" >
	<strong>Enter User Name:</strong><input type="text" name="username" placeholder="User Name" required="required" class="form-control"><br>
	<strong>Enter Secret-Key:</strong><input type="password" name="key" placeholder="Enter Secret-Key" required="required" class="form-control"><br>
	<strong>Create Password</strong><input type="password" name="password" placeholder="Password" required="required" class="form-control"><br>
	<strong>Confirm Password:</strong><input type="password" name="confirm" placeholder="Confirm Password" required="required" class="form-control"><br>
    <button type="submit" name="create_user">Submit</button>

	</form>
   
      <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	  <button type="submit" name="option">Go back without changing</button><br>
	  </form>



<?php

}
else if(isset($_POST['user_pass'])){
?>

<form action="../../includes/known.inc.php"  method="post" style="width:60%;" >

	<strong>Enter New User Name:</strong><input type="text" name="new_password" placeholder="Enter New User Name" required="required" class="form-control"><br>
	<strong>Enter New Password:</strong><input type="password" name="confirm_password" placeholder="Enter New Password" required="required" class="form-control"><br>
	<strong>Confirm New Password:</strong><input type="password" name="new_password" placeholder="Confirm New Password" required="required" class="form-control"><br>
	<strong>Enter User Name:</strong><input type="text" name="new_password" placeholder="Enter User Name" required="required" class="form-control"><br>
	<strong>Enter your Password:</strong><input type="password" name="password" placeholder="Password" required="required" class="form-control"><br>
    <button type="submit" name="user_pass">Submit</button>

	</form>
   
      <form action="../../includes/known.inc.php"  method="post" style="margin-left:43%;">
	  <button type="submit" name="option">Go back without changing</button><br>
	  </form>

<?php

}
else{
?>



<?php

$pulis_details = "SELECT user_name from usernames";

$pd = $conn->query($pulis_details);

?>
<form action="../../includes/known.inc.php"  method="post" style="width:60%;" >

<?php
echo "<table class='table table-striped table-hover' style='width:100%;'><th>UserNames</th><th>Action</th>";
if($pd->num_rows > 0){

	$c=0;
		while($col1 = $pd->fetch_assoc()){
	    $c++;

	    echo "<tr><td>";
	    echo $col1['user_name'];
	    echo "</td><td><button name='delete_user' value='$c' class='btn btn-danger'><p class='glyphicon glyphicon-remove'></p></button>&nbsp;";
        echo "</td></tr>";

        }
}

echo "</table>";
echo "</form>";

?>

</td>
     
     <br>

    <form action="known.php" method="POST" class="form-control"> 
 <!--   <button  name="all" class="btn btn-default btn-lg" style="border:transparent;"><small>Edit All</small></button>&nbsp;&nbsp;&nbsp;&nbsp;-->
	<div id="onu" style="background-color:opaque; width:60%; height:30%; padding-top:10px; padding-bottom:10px; padding-left:40px;">
	<button type='submit' name="s_k" class="btn btn-default btn-lg" style="border:transparent;"><b>Edit secret-key</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
	<button id='b2' name="userName" class="btn btn-default btn-lg" style="border:transparent;"><b>Edit User Name</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
	<button id='b3' name="password" class="btn btn-default btn-lg" style="border:transparent;"><b>Edit Password</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
<!--<button name="user_pass" class="btn btn-default btn-lg" style="border:transparent;"><b>Edit User Name & Password</b></button><br><br>-->
	<button id='b3' name="create_user" class="btn btn-default btn-lg" style="border:transparent;"><b>Create User</b></button>&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	
    </form>
    

<?php


$ps = "SELECT secret_key from secret_key";

$p = $conn->query($ps);

if($p->num_rows > 0){
	$c=0;
		while($col2 = $p->fetch_assoc()){
	    $c++;
	  //  echo "<br>secret : <input type='password' name='secret' value='$col2[secret_key]'>";


        }
}




$x = "SELECT * from admin_table";

$dp = $conn->query($x);

if($dp->num_rows > 0){
	$c=0;
		while($dpc = $dp->fetch_assoc()){
	    $c++;
	//    echo "<br><br> Username : ".$dpc['admin_name'];
	//    echo "<br><br> Password : ".$dpc['admin_password'];


        }
}

}
?>


</td>
</tr>
</table>


</body>
</html>

<script type="text/javascript">
function d(){
document.getElementById('option').style.display=='none';
document.getElementById('b1').style.display=='block';
document.getElementById('b2').style.display=='block';
document.getElementById('b3').style.display=='block';
document.getElementById('b4').style.display=='block';
}

</script>
