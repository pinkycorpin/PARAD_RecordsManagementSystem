<?php
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
    if(!isset($_SESSION['user_admin'])){
	echo "<td>";
	echo "EDIT";
	echo "</td>";
    }
	echo "<td>";
	echo "VIEW";
	echo "</td>";
    echo"</tr>";
    ?>