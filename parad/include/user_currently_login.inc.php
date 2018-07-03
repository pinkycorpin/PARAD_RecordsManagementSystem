<?php
session_start();

if(isset($_SESSION['user_name'])){
  echo"you are currently log-in";
  header("Location= ../index.php?please-login");
  exit();
}
?>