<?php
session_start();
$u=$_SESSION['u'];
echo "welcome".$u;
if(!isset($_SESSION['u'])){
echo "<script>window.location='login.php';</script>";}
echo "welcome to about page";
?>
<a href="home.php">HOME</a><br>
<a href="about.php">ABOUT</a><br>
<a href="logout.php">LOGOUT</a><br>
