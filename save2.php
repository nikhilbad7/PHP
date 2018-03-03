<?php
$r=$_REQUEST["t1"];
$g=$_REQUEST["x"];
$b=$_REQUEST["branch"];
$s=$_REQUEST["sem"];
$n=$_REQUEST["t2"];
$m=$_REQUEST["t3"];
$c=mysqli_connect("localhost","root","","studentnew");
$a="insert into details values('$r','$g','$b','$s','$n','$m')";
$rs=mysqli_query($c,$a);
?>