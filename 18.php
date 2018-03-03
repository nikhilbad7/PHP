<?php
$x=$_GET["x"];
$f=1;
for($i=1;$i<=$x;$i++){
$f=$f*$i;}
echo "factorial of  ".$x."  is  ".$f;
?>