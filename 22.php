<!--//to work on single page
//either dont write action or write the same page(by default) also called as postback
//bcz its a same page so phpengine scan the whole page nd at first tym it is not run so it gives warning and prints blank so to solve this problem we use isset()
//isset tell wheather something is writen or not
//false return means blank and true return means 1 
//by default values are 0,0.0,"0",blank,null,false
//for secure data post is used-->
<form method="post">
<input type="text" name="t1">
<input type="submit" name="b1" value="ok">
</form>
<?php
if(isset($_REQUEST['b1'])){
$x=$_REQUEST["t1"];
echo "$x";}
?>