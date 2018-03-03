<?php
$r=$_REQUEST["rno"];
$n=$_REQUEST["name"];
$m=$_REQUEST["marks"];
$fn=$_FILES["f"]["name"];//by default 2mb size is max
$temp=$_FILES["f"]["tmp_name"];
$c=mysqli_connect('localhost','root','','imagedemo');
$a="select * from profile where rno='$r'";
$rs=mysqli_query($c,$a);
echo "<table border=1><tr><td>rno</td><td>name</td><td>marks</td><td>image</td></tr>";
while($row=mysqli_fetch_array($rs)){
echo "<tr>
<td>$row[rno]</td>
<td>$row[name]</td>
<td>$row[marks]</td>
<td><img src='$row[image]' height='300px' width='200px'></td></tr>";
}
echo "</table>"
?>