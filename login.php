<?php
session_start();
?>
<form>
username:<input type="text" name="u">
password:<input type="password" name="p">
<input type="submit" value="login" name="b1">
</form>
<?php
if(isset($_REQUEST["b1"])){
$u=$_REQUEST["u"];
$p=$_REQUEST["p"];
if($u=="A"&&$p=="A"){
$_SESSION['u']=$u;
echo "<script>window.location='home.php';
</script>";}
else{
echo "invalid username and password";}
}
?>