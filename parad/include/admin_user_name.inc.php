<?php
session_start();

if(!isset($_SESSION['user_admin'])){
   echo"Contact the Authority";
  header("Location= ../index.php?please-login");
  exit();
}

include_once 'db.inc.php';

 if(isset($_POST['edit_username'])){

    $confirm_username=mysqli_real_escape_string($conn,$_POST['confirm_username']);
    $new_username=mysqli_real_escape_string($conn,$_POST['new_username']);
    $User=mysqli_real_escape_string($conn,$_POST['User']);
    $Pass=mysqli_real_escape_string($conn,$_POST['Pass']);
    $pu = "SELECT * from admin where admin_name='$User' && admin_password='$Pass'";
    $py = $conn->query($pu);
    
    if($py->num_rows>0){
        if($new_username !=$confirm_username){
            echo "
             <br><br><br>
                             <center>
                             <div class='alert alert-danger' style='width:20%'>
                             <strong>Error!</strong> Invalid User Field
                             </div></center>'
                             <form action='../views/admin_user_name.php' method='POST'>
                             <center><button class='form-control' style='width:20%'>Okay</button></center>
                             </form>";
                             exit();
        }
        else{
                                                     
            $pie = "UPDATE admin set admin_name='$new_username' where admin_name='$User' && admin_password='$Pass'";
            $conn->query($pie);
            echo "
                <br><br><br>
                <center>
                <div class='alert alert-success' style='width:20%'>
                <strong>Success !</strong>
                </div></center>'
                <form action='../views/admin_user_name.php' method='POST'>
                <center><button class='form-control' style='width:20%'>Okay</button></center>
                </form>";
                exit();                                               
                                                  }
           }
    else{
         echo "
              <br><br><br>
              <center>
              <div class='alert alert-danger' style='width:20%'>
              <strong>Error!</strong> Invalid User Field
              </div></center>'
              <form action='../views/admin_user_name.php' method='POST'>
              <center><button class='form-control' style='width:20%'>Okay</button></center>
              </form>";
              exit();

        }

}
?>