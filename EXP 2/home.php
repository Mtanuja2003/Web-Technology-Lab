<?php
include 'db.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="signup.css">
        <link rel='stylesheet' href='home.css'>
        <script src='main.js'></script>
        <title>Facebook</title>
    </head>
<body>
    <div class="left">
        <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="No image">
        <p>Facebook helps you connect and share with the people in your life.</p>
    </div>
    <div class="right">
    <button type="submit" class='but1' onclick="showLogin()">Login</button>
    <button type="submit" class="but2" onclick="showSignup()">Sign Up</button>
    </div>
    <!--login form-->
    <dialog id="login_dialog">
    <div class="login">
        <div class="top">
        <h2>LOGIN</h2>
        <img src="cross.png" alt="No image" onclick="closeLogin()">
        </div>
        <form name="login_form" method="post" action="check.php">
            <input type="text" placeholder="Email address" name="email" required>
            <input type="password" placeholder="Password" name="pwd" required>
            <div class="button">
            <input type="submit" name="login" value="Log in"></div>
        </form>
    </div>
    </dialog>

    <!--Signup form-->
    <dialog id="signup_dialog">
    <div class="signup">
        <div class="top">
        <h2>SIGNUP</h2>
        <img src="cross.png" alt="No image" onclick="closeSignup()">
        </div>
        <hr>
        <form name="signup_form" method="post" action="database.php">
            <div class="part1">
                <input type="text" placeholder="First name" name="fname" required>
                <input type="text" placeholder="Last name" name="lname" required>
            </div>
            <div class="part2">
                <input type="email" placeholder="Email address" name="email" required>
                <input type="password" placeholder="Password" name="pwd" required>
            </div>
            <div class="part3">
                <p>Date of Birth:</p>
                <input type="date" name="dob" required>
            </div>
            <div class="part4">
                <p>Gender:</p>
                <div class="xyz">
                <div>
                <input type="radio" value="Female" name="gen" required>
                <label for="'female">Female</label>
                </div>
                <div>
                <input type="radio" value="Male" name="gen" required>
                <label for="male">Male</label>
                </div>
                </div>
            </div>
            <div class="part5">
                <input type="submit" name="signup" value="Sign Up">
            </div>
        </form>
    </div>
    </dialog>

<div class='top_likes'>
<?php
    if($connection){
        $sql="SELECT * FROM images ORDER BY likes DESC LIMIT 5";
        $res=mysqli_query($connection,$sql);
        if($res){
        while($row=mysqli_fetch_assoc($res)){
            echo "<div class='full'>";
            echo "<div class='board'>";
            echo $row['Name'];
            $url='uploads/'.$row['Filename'];
            ?>
            <img src='<?php echo $url;?>' alt='no image'>
            <script src="https://kit.fontawesome.com/7b2772717d.js" crossorigin="anonymous"></script>
            <form method='POST'>
            <input type='hidden' name='img_id' value='<?php echo $row['ImgID']; ?>'>
            <input type='hidden' name='filename' value='<?php echo $row['Filename']; ?>'>
            <div class='abc'>
            <button name='like' id='like' style="width:40px;height:40px;"><i class="fa-solid fa-thumbs-up fa-xl"></i></button>
            <?php echo "<p>".$row['likes']."</p>";?>
            <input type='text' name='comment' placeholder='Add comment'>
            <button name='cmt' id='cmt'>POST</button>
        </form>
    <?php
    echo "<p id='cmt_count'>".$row['Comments']."</p>";
    echo "</div>";
    echo "</div>"; 
    echo "</div>";  
        }
    }
    }
    ?>
    <style>
        .top_likes{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-around;
            box-shadow:1px 1px 10px 1px grey;
            border-radius:10px;
            margin-top:600px;
            margin-left:20px;
            margin-right:20px;
            margin-bottom:20px;
        }
        .full{
            display:flex;
            justify-content:space-around;
            flex-wrap:wrap;
            background-color:white;
        }
        .board{
            width:400px;
            border-radius:10px;
            height:400px;
            border:0px;
            box-shadow:1px 1px 10px 1px grey;
            text-align:center;
            font-size:30px;
            font-weight:550;
            margin-left:40px;
            margin-top:30px;
            margin-bottom:30px;
            padding-top:2px;
        }
        .board img{
            margin-top:10px;
            width:100%;
            height:75%;
        }
        .abc button{
            border:0px;
            margin-top:10px;
            background:none;
        }
        .abc{
            display:flex;
            margin-top:1px;
        }
        .abc p{
            margin-top:14px;
            font-size:28px;
        }
        .abc input{
            height:40px;
            width:100px;
            margin-left:40px;
            margin-top:10px;
            border:3px solid black;
        }
        .abc #cmt{
            width:70px;
            height:30px;
            background-color:skyblue;
            margin-left:20px;
            margin-top:15px;
            font-size:20px;
            font-weight:550;
        }
        .abc #cmt_count{
            margin-left:10px;
        }
      </style>              
    </div>
</body>
</html>