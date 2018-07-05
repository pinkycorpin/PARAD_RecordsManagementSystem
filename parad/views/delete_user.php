<?php
include_once('../include/db.inc.php');
include_once('../include/admin_include.inc.php');
$case_details = "SELECT * from user";
$pd = $conn->query($case_details);
if($pd->num_rows > 0){
    
    echo"<table id=\"myTable\" class='table table-striped table-hover' style='float:left;'>";
    echo "<input type='text' name='status' value='' style='display:none'>";
	echo"<th>Case ID :</th><th>Case Title</th><th>Action</th>";
	echo"<tr>";

	while($col1 = $pd->fetch_assoc()){

	echo "<td>";
	echo $col1["user_first"];
	echo"</td>";
	echo"<td>";
	echo $col1["user_last"];
	echo "</td>";
	echo"<td>";
	echo "Delete";
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

