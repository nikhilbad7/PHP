<html>
<body>
<?php
$x=40;
$y=50;
if($x>$y){
$z=$x.'is greater';}
else{
$z=$y.'is greater';}
$s=$x+$y;
if($s%2==0){
$w=$s.'is even';}
echo "<table border=1><tr><td>$x</td><td>$y</td><td>$z</td></tr><tr><td>$x</td><td>$y</td><td>$w</td></tr></table>";
?>
</body>
</html>