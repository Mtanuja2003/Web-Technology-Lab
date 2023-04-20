<?php
session_start();
include "database.php";
if(isset($_POST['email']) && isset($_POST['pwd'])){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
}
if(isset($_POST['login'])){
    $query="select * from details where Email='$email' and Password='$pwd'";
    $res=mysqli_query($connection,$query);
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['fname'] = $row['Name'];
        header("location: dashboard.php");
    }
else{
    echo "<script> 
        alert('Invalid Credentials');
        window.location.href = 'home.php';
      </script>";
    }
}
?>
