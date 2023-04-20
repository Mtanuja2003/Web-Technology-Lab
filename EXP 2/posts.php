<?php
session_start();
include 'db.php';
if($connection){
    $sql="select * from images where Name='".$_SESSION['fname']."'";
    $res=mysqli_query($connection,$sql);
    if($res){
    while($row=mysqli_fetch_assoc($res)){
        echo "<body>";
        echo "<div class='board'>";
        echo $row['Name'];
        $url='uploads/'.$row['Filename'];
        ?>
        <img src='<?php echo $url;?>' alt='no image'>
        <script src="https://kit.fontawesome.com/7b2772717d.js" crossorigin="anonymous"></script>
        <form method='POST' action='likes and comments.php'>
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
echo "</body>";  
    }
}
}
?>
<style>
    body{
        display:flex;
        justify-content:space-around;
        flex-wrap:wrap;
        background-color:white;
    }
    .board{
        width:350px;
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
    .board:hover{
        width:350px;
        height:400px;
    }
    img{
        margin-top:10px;
        width:100%;
        height:75%;
    }
    button{
        border:0px;
        margin-top:10px;
        background:none;
    }
    .abc{
        display:flex;
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