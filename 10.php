<html>
<body>
<?php
echo "<table><tr><td>NAME</td><td><input type='text'></td></tr><tr><td>SEM</td><td><select>";
for($i=1;$i<=8;$i++){
echo "<option>$i</option>";}
echo "</select></td></tr><tr><td>ENTER SUB1 MARKS</td><td><select>";
for($j=1;$j<=100;$j++){
echo "<option>$j</option>";}
echo "</select></td></tr><tr><td>ENTER SUB2 MARKS</td><td><select>";
for($k=1;$k<=100;$k++){
echo "<option>$k</option>";}
echo "</select></td></tr><tr><td><input type='button' value='ok'></td><td><input type='button' value='cancel'></table><br>";
?>
</body>
</html>
