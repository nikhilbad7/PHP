//how to take value from combobox
//value is used for servers value
//in html double quotes is optional but if there is space btwn them then it is must to use double quotes
<form action="14.php">
BRANCH:<select name="branch">
<option value="cse">cse</option>
<option value="it">it</option>
<option value="civil">civil</option>
<option value="mech">mech</option>
</select>
SEM:<select name="sem">
<?php
for($i=1;$i<=8;$i++){
echo "<option value=$i>$i</option>";}
?>
</select>
<input type="submit" value="ok">
</form>
