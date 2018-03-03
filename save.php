<?php
$r=$_REQUEST["t1"];
$n=$_REQUEST["t2"];
$m=$_REQUEST["t3"];
$c=mysqli_connect("localhost","root","","Employ");
$a="insert into details values('$r','$n','$m')";
$rs=mysqli_query($c,$a);
?>