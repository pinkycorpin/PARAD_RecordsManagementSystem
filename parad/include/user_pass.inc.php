<?php
session_start();

if(!isset($_SESSION['user_admin'])){
   echo"Contact the Authority";
  header("Location= ../index.php?please-login");
  exit();
}

include_once 'db.inc.php';


 if(isset($_POST['edit_password'])){

    $confirm_password=mysqli_real_escape_string($conn,$_POST['confirm_password']);
    $new_password=mysqli_real_escape_string($conn,$_POST['new_password']);
    $User=mysqli_real_escape_string($conn,$_POST['User']);
    $Pass=mysqli_real_escape_string($conn,$_POST['password']);


             $pu = "SELECT * from admin_table where admin_name='$User' && admin_password='$Pass'";
                  
                  $py = $conn->query($pu);
                   
                   if($py->num_rows>0){
                                  
                 
                      

                                                 if($new_password !=$confirm_password){

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
                                                 else
                                                 {
                                                     
                                                 $pie = "UPDATE admin_table set admin_password='$new_password' where admin_name='$User' && admin_password='$Pass'";
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

                   ?>