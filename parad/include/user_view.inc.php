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
<<<<<<< HEAD
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
=======
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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
}else if(baseline=="case_title"){
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
}else if(baseline=="case_number"){
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
<<<<<<< HEAD
}else if(baseline=="case_number"){
=======
}else if(baseline=="title_number"){
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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
<<<<<<< HEAD
}else if(baseline=="area"){
=======
}else if(baseline=="land_area"){
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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
<<<<<<< HEAD
}else if(baseline=="owner"){
=======
}else if(baseline=="land_owner"){
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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
<<<<<<< HEAD
}else if(baseline=="title_number"){
=======
}else if(baseline=="adjucator"){
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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
<<<<<<< HEAD
=======
}else if(baseline=="status"){
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
}


}
</script>


    <select name="select" id="down" onchange="createValue()">
    <option value="all">All</option>
    <option value="id">ID</option>
<<<<<<< HEAD
    <option value="name">Name</option>
=======
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
    <option value="case_title">Case Title</option>
    <option value="case_number">Case Number</option>
    <option value="title_number">Title Number</option>
    <option value="land_area">Land Area</option>
    <option value="land_owner">Land Owner</option>
    <option value="adjucator">Adjucator</option>
    <option value="status">status</option>    
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
<<<<<<< HEAD
  echo"</tr>";
=======
>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
  if(isset($_SESSION['user_admin'])){
  echo "<td>";
  echo "EDIT";
  echo "</td>";
  }
  echo "<td>";
  echo "VIEW";
  echo "</td>";
  echo"</tr>";
<<<<<<< HEAD
=======

>>>>>>> 390e3be4db1e342b38e33e259563d61f5c301b27
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