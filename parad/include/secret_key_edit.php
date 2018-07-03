<?php

session_start();

if(!isset($_SESSION['user_admin'])){
   echo"Contact the Authority";
  header("Location= ../index.php?please-login");
  exit();
}

include_once 'db.inc.php';

if(isset($_POST['edit_secret-key'])){

	$old_key=mysqli_real_escape_string($conn,$_POST['old_key']);
    $new_key=mysqli_real_escape_string($conn,$_POST['new_key']);
    $confirm_key=mysqli_real_escape_string($conn,$_POST['confirm_key']);
    $User=mysqli_real_escape_string($conn,$_POST['User']);
    $Pass=mysqli_real_escape_string($conn,$_POST['Pass']);

    $pu = "SELECT * from admin where admin_name='$User' && admin_password='$Pass'";
    $pd = $conn->query($pu);
       if($pd->num_rows>0){
           $pp = "SELECT * from secret_key where secret_key='$old_key'";
           $pa = $conn->query($pp);
             if($pa->num_rows>0){
                    if($new_key!=$confirm_key){
                            echo "
                             <br><br><br>
                             <center>
                             <div class='alert alert-danger' style='width:20%'>
                             <strong>Error!</strong> Invalid confirm key
                             </div></center>'
                             <form action='../views/admin_key.php' method='POST'>
                             <center><button name='s_k' class='form-control' style='width:20%'>Okay</button></center>
                             </form>";
                             exit();
                      }else{
                      		 $pc = "UPDATE secret_key set secret_key='$new_key' where secret_key='$old_key'";
                             $pb = $conn->query($pc);
                             echo "
                             <br><br><br>
                             <center>
                             <div class='alert alert-success' style='width:20%'>
                             <strong>Success !</strong>
                             </div></center>'
                             <form action='../views/admin_key.php' method='POST'>
                             <center><button name='s_k' class='form-control' style='width:20%'>Okay</button></center>
                             </form>";
                             exit();
                         }
                }
                else{
                	  echo "
                      <br><br><br>
                       <center>
                       <div class='alert alert-danger' style='width:20%'>
                       <strong>Error!</strong> Invalid Secret Key
                       </div></center>'
                       <form action='../views/admin_key.php' method='POST'>
                       <center><button name='s_k' class='form-control' style='width:20%'>Okay</button></center>
                       </form>";
                       exit();
                }

                     
        }
        else{
                echo "
                      <br><br><br>
                       <center>
                       <div class='alert alert-danger' style='width:20%'>
                       <strong>Error!</strong> Invalid User or Password
                       </div></center>'
                       <form action='../views/admin_key.php' method='POST'>
                       <center><button name='s_k' class='form-control' style='width:20%'>Okay</button></center>
                        </form>";
                        exit();
        }

    }




?>
