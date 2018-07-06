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
</script>

<script>
var baseline = "";
function createValue(){
   var juan = document.getElementById('down').value;
  this.baseline = juan;
   myFunction();
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
}else if(baseline=="title_number"){
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
}else if(baseline=="land_area"){
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
}else if(baseline=="land_owner"){
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
}else if(baseline=="adjucator"){
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
}


}
</script>

     <table class="table table-borderless" style="width:30%;float:right;background-color:rgba(225,225,225,.01);">
          <thead>
            <tr>
              <th scope="col">
              <select class="ui dropdown" name="select" id="down" onchange="createValue()">
                  <option value="all">All</option>
                  <option value="id">ID</option>
                  <option value="case_title">Case Title</option>
                  <option value="case_number">Case Number</option>
                  <option value="title_number">Title Number</option>
                  <option value="land_area">Land Area</option>
                  <option value="land_owner">Land Owner</option>
                  <option value="adjucator">Adjucator</option>
                  <option value="status">status</option> 
                </select>
              </th>
              <th scope="col">
                <div class="ui category search" >
                <div class="ui icon input">
                <input  type="text" class= "search" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a product name" >
                </div>
                <div class="results"></div>
              </div>
              </th>
            </tr>
          </thead>
        </table>
<form action="../include/view_edit.php" method="POST">

<?php
echo"<table id=\"myTable\" class='ui black table' style='float:left; width:100%;'>";
    echo "<input type='text' name='status' value='' style='display:none'>";
  echo"<th>Case ID :</th><th>Case Title</th><th>Case Number</th><th>Title Number</th><th>Land Area</th><th>Land Owner</th><th>Adjudicator</th><th>Status</th><th>Timestamp</th><th colspan='2'><center>Action</center></th>";
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
  if(isset($_SESSION['user_admin'])){
  echo "<td>";
<<<<<<< HEAD
  echo "<button name='edit_button' value='$col1[case_info_id]' class='ui black basic button' style='width:85%;'>EDIT</button>";
  echo "</td>";
  }
  echo "<td>";
  echo "<button name='view_button' value='$col1[case_info_id]' class='ui black basic button'style='width:85%;'>VIEW</button>";
=======
  echo "<button name='edit_button' value='$col1[case_info_id]' >EDIT</button>";
  echo "</td>";
  }
  echo "<td>";
  echo "<button name='view_button' value='$col1[case_info_id]' >VIEW</button>";
>>>>>>> bccd33b5a04be43c6661577d21eb7a371d6dd5cf
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