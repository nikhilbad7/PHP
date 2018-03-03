<!--here we used move_uploaded_file(source,destination)-->
<form method="post" enctype="multipart/form-data">
<input type="file" name="x">
<input type="submit" name="b1" value="save">
</form>
<?php
if(isset($_REQUEST["b1"])){
$n=$_FILES['x']['name'];
$tmp=$_FILES['x']['tmp_name'];
if(move_uploaded_file($tmp,$n)){
echo "uploaded";}
else{
echo "error";}
}
?>