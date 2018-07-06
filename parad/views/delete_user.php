<?php
include_once('../include/db.inc.php');
include_once('../include/admin_include.inc.php');
include_once('../templates/header.php');
?>

<div class="ui secondary pointing menu">
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
                        <a href="../include/logout.inc.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<form action="../include/delete_user_inc.php" method="POST">
<?php
$case_details = "SELECT * from user";
$pd = $conn->query($case_details);

if($pd->num_rows > 0){
    
    echo"<table id=\"myTable\" class='table table-striped table-hover' style='float:left;width:700px; '>";
    echo "<input type='text' name='status' value='' style='display:none'>";
	echo"<th>Name</th><th>Action</th>";
	echo"<tr>";
		while($col1 = $pd->fetch_assoc()){
	echo "<td>";
	echo $col1["user_first"] . " " . $col1["user_last"];
	echo "</td>";
	echo"<td>";
	echo "<button name='delete_button' id='button_id' value='$col1[user_id]'>Delete</button>";
	echo "</td>";
    echo"</tr>";

	}
	echo "</form>";

}
else{
  echo "
        <br><br><br>
        <center>
        <div class='alert alert-success' style='width:20%'>
        <strong>0 result</strong> 
        </div></center>'
                              ";

}
echo"</table>";

$conn->close();

?>

