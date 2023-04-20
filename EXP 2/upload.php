<?php
session_start();
include "db.php";
    if(isset($connection))
    {
    $filename=$_FILES['image']['name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];
    $tempfile=$_FILES['image']['tmp_name'];
    $target_dir='uploads/'.$filename;
?>
<html>
    <body>
        <?php
            if(move_uploaded_file($tempfile,$target_dir))
            {
                echo "<h2>File Uploaded</h2>";
                echo "<p>Your File is uploaded successfully</p>";
                echo "<img src='uploads/$filename' alt='Error in viewing image' width=200px height=200px>";
                echo "<p>File Name = <b>$filename</b></p>";
                echo "<p>File Type = <b>$filetype</b></p>";
                echo "<p>File Size = <b>$filesize</b></p>";
                echo "<p>File Path = <b>$tempfile</b></p>";
                $sql="select * from images";
                $res=mysqli_query($connection,$sql);
                $row=mysqli_num_rows($res)+1;
                $sql="insert into images(ImgID,Name,Filename,Filetype,Filesize) values('$row','".$_SESSION['fname']."','".$filename."','".$filetype."','".$filesize."')";
                if(mysqli_query($connection,$sql)){
                    echo "<script>window.location.href='posts.php'</script>";
                }
            }
            else{
                echo 'Error occured during file upload!';
            }
    }
        ?>
    </body>
</html>