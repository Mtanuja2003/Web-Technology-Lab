<?php
session_start();
?>
<html>
    <head>
        <title>Dashboard</title>
        <style>
            body{
                background-color:skyblue;
            }
            div{
                display:flex;
                justify-content:space-evenly;
                margin-top:-20px;
            }
            h3{
                font-weight:800;
                font-size:45px;
                margin-left:10px;
            }
            a{
                text-decoration:none;
                border:0px;
                box-shadow:1px 1px 10px 1px grey;
                font-weight:bolder;
                padding:10px;
                border-radius:10px;
                font-size:20px;
                text-align:center;
            }
            .home{
                width:70px;
                height:30px;
            }
            .upload{
                width:100px;
                height:40px;
            }
            .posts{
                width:70px;
                height:30px;
            }
            .profile{
                width:70px;
                height:30px;
            }
            .logout{
                width:70px;
                height:30px;
            }
        </style>
</head>
<body>
    <?php
    if(isset($_SESSION['fname'])){
        ?>
<h3>Welcome, <?php echo $_SESSION['fname'];?></h3>
<div>
<a href="dash_down.php" target="down" class='home'>Home</a>
<a href="upload.html" target="down" class='upload'>Upload Photo</a>
<a href="posts.php" target="down" class='posts'>Posts</a>
<a href="display.php" target="down" class='profile'>Profile</a>
<a href="logout.php" target="_top" class='logout'>Logout</a>
    </div>
        <?php
    }
    ?>
</body>
<html>