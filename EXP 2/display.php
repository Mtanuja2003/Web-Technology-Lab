<?php
session_start();
include 'db.php';
$sql="select * from details where Name='".$_SESSION['fname']."'";
$res=mysqli_query($connection,$sql);
if($res){
    while($row=mysqli_fetch_assoc($res))
    {
        echo "<div>";
        echo "<table>";
        foreach($row as $x=>$y){
            echo "<tr>";
            echo "<td><b>$x:</b></td>";
            echo "<td>$y</td>";
            echo "</tr>";
        }
        echo "<tr>";
        $query="select * from images where Name='".$_SESSION['fname']."'";
        $result=mysqli_query($connection,$query);
        echo "<td><b>Posts:</b></td>";
        echo "<td>";
        echo mysqli_num_rows($result);
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        $query="SELECT SUM(likes) as total FROM images WHERE Name = '".$_SESSION['fname']."'";
        $result=mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($result);
        echo "<td><b>Likes:</b></td>";
        echo "<td>";
        echo $row['total'];
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        $query="SELECT SUM(Comments) as total FROM images WHERE Name = '".$_SESSION['fname']."'";
        $result=mysqli_query($connection,$query);
        $row = mysqli_fetch_assoc($result);
        echo "<td><b>Comments:</b></td>";
        echo "<td>";
        echo $row['total'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    }
}
?>
<style>
    div{
        width:400px;
        height:300px;
        border:0px;
        border-radius:10px;
        box-shadow:1px 1px 10px 1px grey;
        margin-left:38%;
        margin-top:8%;
        padding-top:20px;
        padding-bottom:50px;
        padding-left:20px;
        padding-right:20px;
    }
    td,tr{
        font-size:20px;
    }
    table{
        border-spacing:10px;
    }
</style>