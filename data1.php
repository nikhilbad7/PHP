<form action="save2.php" method="post">
RNO:<input type="text" name="t1"><br><br>
GENDER:<input type="radio" name="x" value="male">male
<input type="radio" name="x" value="female">female<br><br>
BRANCH::<select name="branch">
<option value="cse">cse</option>
<option value="it">it</option>
<option value="civil">civil</option>
<option value="mech">mech</option>
</select><br><br>
SEM:<select name="sem">
<?php
for($i=1;$i<=8;$i++){
echo "<option value=$i>$i</option>";}
?>
</select><br><br>
NAME:<input type="text" name="t2"><br><br>
MOBNO:<input type="text" name="t3"><br><br>
<input type="submit" value="save">
</form>
