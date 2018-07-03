<?php
include_once('../include/user_include.inc.php');
include_once('db.inc.php');

?>
                 <ul>
                 <li><a href="../views/insert.php">insert</a></li>
                 <li><a href="../views/admin_home.php">view</a></li>
                 <ul>

 <form action="logout.inc.php" method="POST">
                 <button type="submit" name="submit" >logout</button>
<?php

 if($_POST['submit_one'] == null){
echo "asdflkjasldfkjasdf";
exit();
 }


if($_POST['select'] == 'all'){
$case_details = "SELECT * from case_information";
$pd = $conn->query($case_details);
}
else if($_POST['select']=='all'){

}
else if($_POST['select']=='name'){

}
else if($_POST['select']=='case_title'){

}
else if($_POST['select']=='case_number'){

}
else if($_POST['select']=='area'){

}
else if($_POST['select']=='owner'){

}
else if($_POST['select']=='title_number'){

}
if($pd->num_rows > 0){
?>           


	<form action='search_information.inc.php' method='POST' style='float:right; margin-right:20px;'>
	<select >
    <option value="all" name="all">All</option>
    <option value="name" name="name">Name</option>
    <option value="case_title" name="case_title">Case Title</option>
    <option value="case_number" name="case_number">Case #</option>
    <option value="area" name="area">Area</option>
    <option value="owner" name="owner">Owner</option>
    <option value="title_number" name="title_number">Title #</option>
    </select>
	<input type='submit' name = 'submit_one' style='float:right;'>&nbsp;
	<input type='search' name='search' placeholder='Enter keyword' style='float:right;'>
    <table class='table table-striped table-hover' style='float:left;'>
	<th>Case ID :</th><th>Case Title</th><th>Case Number</th><th>Title Number</th><th>Land Area</th><th>land Owner</th><th>adjudicator</th><th>Status</th><th>timestamp</th><th colspan='2'>Action</th>
	<tr>
  
  <?php
    $c=0;
	while($col1 = $pd->fetch_assoc()){
	$c++;
	echo "<td>";
	echo $col1["case_info_id"];
	echo"</td>";
	echo"<td>";
	echo $col1["case_title"];
	echo "</td>";
	echo"<td>";
	echo $col1["case_number"];
	echo "</td>";
    echo"<td>";
	echo $col1["title_number"];
	echo"</td>";
	echo "<td>";
	echo $col1["land_area"];
	echo "</td>";
	echo "<td>";
	echo $col1["land_owner"];
	echo "</td>";
	echo "<td>";
	echo $col1["adjudicator"];
	echo "</td>";
	echo "<td>";
	echo $col1["status"];
	echo "</td>";
	echo "<td>";
	echo $col1["timestamp"];
	echo "</td>";
	if(isset($_SESSION['user_admin'])){
	echo "<td>";
	echo "EDIT";
	echo "</td>";
	}
	echo "<td>";
	echo "VIEW";
	echo "</td>";
    echo"</tr>";
	}
	echo "</form>";

}
else{
      ?> 
        <br><br><br>
        <center>
        <div class='alert alert-success' style='width:20%'>
        <strong>0 result</strong> 
        </div></center>'
       <?php
}
echo"</table>";

$conn->close();

	
?>