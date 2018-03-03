<?php
$x=$_GET["t1"];//called as associated array cox in bracket we are writing names
$y=$_GET["t2"];
$z=$_GET["x"];
$s=$x+$y;
$m=$x*$y;
$d=$x/$y;
if($z=="add"){
echo "sum is  ".$s;}
else if($z=="mult"){
echo "multiplication is  ".$m;}
else if($z=="div"){
echo "division is  ".$d;}
?>