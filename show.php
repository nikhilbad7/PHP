<?php
$c=mysqli_connect('localhost','root','','notes');
$a="select * from booktable";
$rs=mysqli_query($c,$a);
while($row=mysqli_fetch_array($rs)){
echo "$row[bookid] $row[bookname] $row[author] $row[branch] $row[sem] <a href='$row[url]'>Download<br><br>";
}
?>