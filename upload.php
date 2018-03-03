<form method="post" enctype="multipart/form-data">
BOOKNAME:<input type="text" name="bkname"><br><br>
AUTHOR:<input type="text" name="author"><br><br>
BRANCH:<select name="branch"><option value="CSE">CSE</option>
<option value="MECH">MECH</option>
<option value="CIVIL">CIVIL</option></select><br><br>
SEM:<select name="sem">
<?php
for($i=1;$i<=8;$i++){
echo "<option value=$i>$i</option>";}
?>
</select><br><br>
FILE:<input type="file" name="f"><br><br>
<input type="submit" name="b1" value="save">
</form>
<?php
if(isset($_POST["b1"])){
$bkname=$_POST["bkname"];
$author=$_POST["author"];
$branch=$_POST["branch"];
$sem=$_POST["sem"];
$fname=$_FILES["f"]["name"];
$tmp=$_FILES["f"]["tmp_name"];
if(move_uploaded_file($tmp,$fname)){
$c=mysqli_connect("localhost","root","","notes");
$q="insert into booktable values(NULL,'$bkname','$author','$branch','$sem','$fname')";
$rs=mysqli_query($c,$q);
if($rs){
echo "successfull";}
else{
echo "error";}
}
else{
echo "error while uploading";}}
?>
