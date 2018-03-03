<!--//file uploading means file should be submitted from client to server(here htdocs)
//post is compulsary,for larger data and any type of file
//(encryption type)enctype="multipart/form-date">(for file)
three types bydefault
//another associated array is used $_FILES['name']['attribute'] which is used for uploading information
//total 5 attributes 1.name(name of file) 2.type(which type of file) 3.tmp_name(in php file is automatically saved in tmp folder) 4.size(size of file) 5.error(if no =0and if yes then some number)
//for browse use input type="file"-->
<form method="post" enctype="multipart/form-data">
<input type="file" name="x">
<input type="submit" name="b1" value="save">
</form>
<?php
if(isset($_REQUEST["b1"])){
$n=$_FILES['x']['name'];
echo "$n<br>";
$type=$_FILES['x']['type'];
echo "$type<br>";
$tmp=$_FILES['x']['tmp_name'];
echo "$tmp<br>";
$s=$_FILES['x']['size'];
echo "$s<br>";
$e=$_FILES['x']['error'];
echo "$e";}
?>