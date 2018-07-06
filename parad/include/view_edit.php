<?php
include_once('db.inc.php');
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
                        <a href="../include/logout.inc.php"">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
if(isset($_POST['edit_it'])){
     $ref_id = $_POST['reference_id'];
     $pu = "SELECT * from case_information where case_info_id='$ref_id'";
     $new_case_title =  $_POST['case_Title'];
     $new_case_number = $_POST['case_Number'];
     $new_title_number = $_POST['title_Number'];
     $new_land_area = $_POST['land_Area'];
     $new_land_owner = $_POST['land_Owner'];
     $new_adjudicator = $_POST['Adjudicator'];
     $new_status=$_POST['Status'];
     $py = $conn->query($pu); 
    if($py->num_rows>0){
            while($col1 = $py->fetch_assoc()){
                   if($ref_id==$col1['case_info_id']){
                    $update = "UPDATE case_information SET case_title='$new_case_title',case_number='$new_case_number',title_number='$new_title_number',land_area='$new_land_area',land_owner='$new_land_owner',land_owner='$new_land_owner',adjudicator='$new_adjudicator',status='$new_status'where case_info_id='$ref_id'";
                       $conn->query($update);
                       header("Location: ../views/admin_home.php");
                   }
            }
     }
}
else if(isset($_POST['view_button'])){
       $User = $_POST['view_button'];
       $pu = "SELECT * from case_information where case_info_id='$User'";
       $py = $conn->query($pu); 
           if($py->num_rows>0){
            while($col1 = $py->fetch_assoc()){
                  if($col1['case_info_id'] == $User){

                       echo $col1['case_title'].'<br>';
                       echo $col1['case_number'].'<br>';
                       echo $col1['title_number'].'<br>';
                       echo $col1['land_area'].'<br>';
                       echo $col1['land_owner'].'<br>';
                       echo $col1['adjudicator'].'<br>';
                       echo $col1['status'].'<br>';
                       echo $col1['timestamp'].'<br>';

                  }
             }
          }

  exit();
}
else if(isset($_POST['edit_button'])){
	    $User = $_POST['edit_button'];
        $pu = "SELECT * from case_information where case_info_id='$User'";
        $py = $conn->query($pu); 
    if($py->num_rows>0){
            while($col1 = $py->fetch_assoc()){
                  if($col1['case_info_id'] == $User){
                    ?>

  <div class="body" style="width:100%;height:80%;">
    <center>
            <div class="ui small form" style="width:30%;margin:3%;background-color:red;">
                <?php
                      echo "<form action='view_edit.php' method='POST'>
                              <label>Case Title : </label><br>
                                <input type='input' value='$col1[case_info_id]' name='reference_id' style='display:none;'>
                                <input type='input' value='$col1[case_title]' name='case_Title'><br><br>
                              <label>Case Number: </label><br>
                                <input type='input' value='$col1[case_number]' name='case_Number'><br><br> 
                              <label>Title Number: </label><br>
                                <input type='input' value='$col1[title_number]' name='title_Number'><br><br>
                              <label>Land Area:</label><br>
                                <input type='input' value='$col1[land_area]' name='land_Area'><br><br>
                              <label>Land Owner :</label><br>
                                <input type='input' value='$col1[land_owner]' name='land_Owner'><br><br>
                              <label>Adjudicator</label><br>
                                <input type='input' value='$col1[adjudicator]' name='Adjudicator'><br><br>
                              <label>Status</label><br>
                                <input type='input' value=$col1[status] name='Status'>
                              <button name='edit_it'>Update Details</button>
                              </form>
                              <form action='../views/admin_home.php'>
                              <button>Go back without changes</button>
                              </form>
                      ";
              ?>
            </div>
      </center>
  </div>
              <?php
                  }
            }


      }else{
      	echo "negative";
      }
}



?>
<?php
  include_once('../templates/footer.php');
?>