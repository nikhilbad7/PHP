<?php
if(isset($_REQUEST["b1"])){
$x=$_REQUEST["t1"];
$y=$_REQUEST["t2"];
$tmp=$_FILES['x']['tmp_name'];
$tname=$_FILES['x']['name'];
if(move_uploaded_file($tmp,$tname)){
echo "<table border=1><tr><td>NAME</td><td>$x</td></tr><tr><td>RoLLNO</td><td>$y</td></tr><tr><td>FILE SELECTED</td><td><img src='$tname' height='200px' width='100px'></td></tr></table>";

echo "successfully uploaded";}}
?>