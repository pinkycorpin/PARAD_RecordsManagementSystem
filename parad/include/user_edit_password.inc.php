<?php
include_once('user_include.inc.php');
include_once('db.inc.php');

if(isset($_POST['edit_password'])){

    $confirm_password=mysqli_real_escape_string($conn,$_POST['confirm_password']);
    $new_password=mysqli_real_escape_string($conn,$_POST['new_password']);
    $User=mysqli_real_escape_string($conn,$_POST['User']);
    $Pass=mysqli_real_escape_string($conn,$_POST['password']);
    $pu = "SELECT * from user where user_name='$User' && user_password='$Pass'";
    $py = $conn->query($pu); 
    if($py->num_rows>0){
        if($new_password !=$confirm_password){
            echo "
             <br><br><br>
             <center>
             <div class='alert alert-danger' style='width:20%'>
             <strong>Error!</strong> Invalid User Field
             </div></center>'
             <form action='../views/user_form_password.php' method='POST'>
             <center><button class='form-control' style='width:20%'>Okay</button></center>
             </form>";
             exit();
          }
          else{
               $pie = "UPDATE user set user_password='$new_password' where user_name='$User' && user_password='$Pass'";
               $conn->query($pie);
               echo "
               <br><br><br>
               <center>
               <div class='alert alert-success' style='width:20%'>
               <strong>Success !</strong>
               </div></center>'
               <form action='../views/user_form_password.php' method='POST'>
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
              <form action='../views/user_form_password.php' method='POST'>
              <center><button class='form-control' style='width:20%'>Okay</button></center>
              </form>";
              exit();
                                     
        }

  }
?>