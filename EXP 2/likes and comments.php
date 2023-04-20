<?php
session_start();
include 'db.php';
if(isset($_POST['like'])){
    $image_id = $_POST['img_id'];
    $name = $_SESSION["fname"];
    $sql = "select * from likes where Name='$name'and ImgID='$image_id' " ;
    $res = mysqli_query($connection,$sql);
    if (mysqli_num_rows( $res ) > 0) {
      echo "<script>alert('You have already liked the post');</script>";
    } 
    else {
      $sql = "UPDATE images SET likes=likes+1 WHERE ImgID='$image_id'";
        if (mysqli_query($connection,$sql) === TRUE) {
        } 
        else {
        }
        $sql = "INSERT INTO likes(ImgID,Name, Filename) VALUES('$image_id', '$name', '{$_POST['filename']}')";

      if (mysqli_query($connection,$sql) === TRUE) {
        echo "<script>document.getElementById('like').style.color='blue';</script>";
      } 
      else {
      }
    }
    }
    if(isset($_POST['cmt'])){
      $image_id = $_POST['img_id'];
      $name = $_SESSION["fname"];
      $sql = "select * from comments where Name='$name'and ImgID='$image_id' " ;
      $res = mysqli_query($connection,$sql);
      if (mysqli_num_rows( $res ) > 0) {
        echo "<script>alert('You have already commented the post');</script>";
      } 
      else {
        $sql = "UPDATE images SET comments=comments+1 WHERE ImgID='$image_id'";
          if (mysqli_query($connection,$sql) === TRUE) {
          } 
          else {
          }
          $sql = "INSERT INTO comments(ImgID,Name, Filename,Comment) VALUES('$image_id', '$name', '{$_POST['filename']}','{$_POST['comment']}')";
  
        if (mysqli_query($connection,$sql) === TRUE) {
        } 
        else {
        }
      }
      }
    echo '<script>top.location.href = "dashboard.php";</script>';

exit();

    
    ?>