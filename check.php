<?php
$x=$_POST["t1"];
$y=$_POST["t2"];
$c=mysqli_connect("localhost","root","","login");
$q="select * from logintable where username='$x' and password='$y'";
$rs=mysqli_query($c,$q);
if($row=mysqli_fetch_array($rs)){
echo "valid user";}
else{
echo "invalid user";}
?>