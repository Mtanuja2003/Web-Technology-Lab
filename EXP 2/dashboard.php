<?php
session_start();
if(!isset($_SESSION['fname'])){
    echo "<h1 style='text-align:center;margin-top:20px;'>Session Expired</h1>";
    exit();
}
?>
<html>
<frameset rows="22%,78%" frameborder=0>
    <frame name="top" src="dash_top.php">
    <frame name="down" src="dash_down.php">
</frameset>
</html>        