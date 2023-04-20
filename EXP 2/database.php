<?php
include "db.php";
if(isset($connection)){
    if($_POST['signup']){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['pwd'];
        $dob=$_POST['dob'];
        $gender=$_POST['gen'];
        $query="select * from details where Email='$email' and Password='$pass'";
        $res=mysqli_query($connection,$query);
        if(mysqli_num_rows($res)>0){
            echo "<script> 
            alert('You are already registered,please check');
            window.location.href = 'home.php';
          </script>";
        }
        else{
        $query="insert into details(Name,Surname,Email,Password,Birthday,Gender) 
        values('$fname','$lname','$email','$pass','$dob','$gender')";
        if(mysqli_query($connection,$query)){
            echo "<script> 
        alert('Now login to see your account!');
        window.location.href = 'home.php';
      </script>";
        }
    }
}
}
?>