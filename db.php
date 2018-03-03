<?php
$c=mysqli_connect("localhost","root","","Employ");
$a="insert into details values('102','A','70')";
$rs=mysqli_query($c,$a);
if($rs){
echo "successfull";}
else{
echo "unsuccessfull";}
?>