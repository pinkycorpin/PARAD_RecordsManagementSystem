<?php
include_once('../include/admin_include.inc.php');
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

    <center>
    <div class="body" style="width:100%;height:80%;">
        <form action="admin_key.php" method="POST">
            <button name="s_k">edit Secret Key</button>
        </form>
        
        <div class="view" style="width:80%;height:100%;background-color:lightgray;">   
            <?php include_once('../include/user_view.inc.php');?>
        </div>
        
        <div class="footer" style="width:100%;height:5%; background-color:rgb(0,62,62);">
            <br><br>
        </div>
    </div>
    </center>

</body>            
                 




