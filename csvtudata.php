<?php
$r=$_REQUEST["rno"];
$n=$_REQUEST["name"];
$faname=$_REQUEST["namef"];
$m1=$_REQUEST["name1"];
$m2=$_REQUEST["name2"];
$m3=$_REQUEST["name3"];
$m4=$_REQUEST["name4"];
$m5=$_REQUEST["name5"];
$m6=$_REQUEST["name6"];
$t=$m1+$m2+$m3+$m4+$m5+$m6;
$p=$t/6;
if($p>=40){
$result="pass";}
else{
	$result="fail";
}
$fn=$_FILES["f"]["name"];
$temp=$_FILES["f"]["tmp_name"];
if(move_uploaded_file($temp,$fn)){
$c=mysqli_connect('localhost','root','','csvtu');
$q="insert into results values('$r','$n','$faname','$m1','$m2','$m3','$m4','$m5','$m6','$t','$p','$result','$fn')";
$rs=mysqli_query($c,$q);
if($rs){
echo "successfull";}
else{
echo" error";}}
else{
echo "error while uploading";}
?>