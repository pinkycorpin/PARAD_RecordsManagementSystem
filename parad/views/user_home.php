<?php
include_once('../include/user_include.inc.php');
include_once('../include/db.inc.php');
?>    

<head>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/semantic.css">
    <style type="text/css">
        html{
            width:100%;
            height:100%;
        }
    </style>
</head>

<body>
    <div class="header" style="background-color:rgb(0,62,62);text-align:center;height:15%;width:100%">
        <img src="../images/DARLogo.png" class="img-fluid" alt="Responsive image" style="width:7%;height:75%;float:left;margin:1%;">
        <img src="../images/dept.png" class="img-fluid" alt="Responsive image" style="width:40%;height:100%;float:left;z-index:2;margin-top:1%;">
    </div>


    <div class="ui secondary pointing menu">
        <a class="item" href="../views/admin_home.php">
            Home
        </a>
        <a class="active item">
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
                    <button class="dropbut"> <img src="../images/profile.png" style="width:80%;height:100%;margin-top:-10%;"> </button>
                    <div class="drop_conts">
                        <a href="admin_user_name.php">Edit Username</a>
                        <a href="admin_key.php">Edit Secret Key</a>
                        <a href="form_password.php">Edit Password</a>
                        <a href="user_pass.php">Edit Username and password</a>
                        <a href="delete_user.php">Delete User</a>
                        <a href="../include/logout.inc.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
    <div class="body" style="width:100%;height:80%;">
        
        
        

        <div class="view" style="width:95%;height:100%;background-color:rgba(225,225,225,.3);">   
        		<?php include_once('../include/user_view.inc.php');?>
        </div>
        
        <div class="footer" style="width:100%;height:5%; background-color:rgb(0,62,62);">
            <br><br>
        </div>
    </div>
    </center>

</body>  



                  