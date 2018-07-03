<?php
session_start();

if(!isset($_SESSION['user_admin'])){
    echo"Contact the Authority";
  header("Location= ../index.php?please-login");
  exit();
}
?>