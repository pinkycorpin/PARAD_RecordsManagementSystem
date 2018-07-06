<?php
include_once('admin_include.inc.php');
include_once('db.inc.php');

if(isset($_POST['delete_button'])){
	    $User = $_POST['delete_button'];
        $pu = "SELECT * from user where user_id='$User'";
        $py = $conn->query($pu); 
    if($py->num_rows>0){
            while($col1 = $py->fetch_assoc()){
                  if($col1['user_id'] == $User){
                  	$query7 = "DELETE from user where user_id = '$User' ";
                  	$conn->query($query7);
                    header("Location: ../views/delete_user.php");
                  }
            }


      }else{
      	echo "negative";
      }
}



?>