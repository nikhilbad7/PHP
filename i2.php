<?php
$r=$_REQUEST["rno"];
$n=$_REQUEST["name"];
$m=$_REQUEST["marks"];
$fn=$_FILES["f"]["name"];//by default 2mb size is max
$temp=$_FILES["f"]["tmp_name"];
if(move_uploaded_file($temp,$fn)){
$c=mysqli_connect('localhost','root','','imagedemo');
$q="insert into profile values('$r','$n','$m','$fn')";
$rs=mysqli_query($c,$q);
if($rs){
echo "successfull";}
else{
echo" error";}}
else{
echo "error while uploading";}
?>