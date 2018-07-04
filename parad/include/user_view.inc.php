<input src="../images/search.png" type="text" class= "search" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a product name">


<?php

$case_details = "SELECT * from case_information";
$pd = $conn->query($case_details);
if($pd->num_rows > 0){

$c=0;
?>
<script>
  var  baseeline = "";
  function evaluate(){
    baseline = document.getElementById("down").value;
    alert(baseline);
  }
  /*
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    if(baseline == "" || baseline == "all"){
    td = tr[i];
    }else if(baseline == "id"){
      td = tr[i].getElementsByTagName("td")[0];
    }else if(baseline == "name"){
      td = tr[i].getElementsByTagName("td")[1];
    }else if(baseline == "case_title"){
      td = tr[i].getElementsByTagName("td")[2];
    }else if(baseline == "case_number"){
      td = tr[i].getElementsByTagName("td")[3];
    }else if(baseline == "area"){
     td = tr[i].getElementsByTagName("td")[4];
    }else if(baseline == "owner"){
     td = tr[i].getElementsByTagName("td")[5];
    }else if(baseeline == "title_number"){
     td = tr[i].getElementsByTagName("td")[6];
    }
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}*/
</script>

<script>
var baseline = "";
function createValue(){
   var juan = document.getElementById('down').value;
  this.baseline = juan;
}
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

if(baseline=="" || baseline=="all"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="id"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="name"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="case_title"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="case_number"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="area"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="owner"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}else if(baseline=="title_number"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


}
</script>


    <select name="select" id="down" onchange="createValue()">
    <option value="all">All</option>
    <option value="id">ID</option>
    <option value="name">Name</option>
    <option value="case_title">Case Title</option>
    <option value="case_number">Case #</option>
    <option value="area">Area</option>
    <option value="owner">Owner</option>
    <option value="title_number">Title #</option>
    </select>


<?php
echo"<table id=\"myTable\" class='table table-striped table-hover' style='float:left;'>";
    echo "<input type='text' name='status' value='' style='display:none'>";
	echo"<th>Case ID :</th><th>Case Title</th><th>Case Number</th><th>Title Number</th><th>Land Area</th><th>land Owner</th><th>adjudicator</th><th>Status</th><th>timestamp</th><th colspan=''>Action</th>";
	echo"<tr>";
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
  echo"</tr>";
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