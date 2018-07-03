<?php
include_once('db.inc.php');

  if(isset($_POST['submit'])){

  $case_id=mysqli_real_escape_string($conn,$_POST['case_id']);
  $case_title=mysqli_real_escape_string($conn,$_POST['case_title']);
  $case_number=mysqli_real_escape_string($conn,$_POST['case_number']);
  $title_number=mysqli_real_escape_string($conn,$_POST['title_number']);
  $land_area=mysqli_real_escape_string($conn,$_POST['land_area']);
  $land_owner=mysqli_real_escape_string($conn,$_POST['land_owner']);
  $adjudicator=mysqli_real_escape_string($conn,$_POST['adjudicator']);
  $status=mysqli_real_escape_string($conn,$_POST['status']);

            $sql4="INSERT INTO case_information (case_info_id,case_title,case_number,title_number,land_area,land_owner,adjudicator,status)
            VALUES
            ('$case_id','$case_title','$case_number','$title_number','$land_area','$land_owner','$adjudicator','$status')";
            mysqli_query($conn,$sql4);
            $conn->close();
            header("Location: ../views/admin_home.php");
 }
 


?>