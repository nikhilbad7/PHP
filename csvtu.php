<html>
<body>
<style>
#main{
	height:1000px;
	width:100%;
	background-color:#fff;
}
#header{
	height:100px;
	width:100%;
	background-color:gray;
	position:fixed;
}
#h1{
	position:fixed;
	top:0px;
	left:250px;
}
#h11{
	color:black;
font-size:30px;}
#h2{
position:fixed;
top:50px;
left:500px;	
}
#h22{
	color:black;
	font-size:15px;
}
#content{
	height:300px;
	width:70%;
	background-color:#fff;
	
}
#c1{
	top:105px;
position:fixed;
height:170px;
}
#footer{
	height:500px;
	width:70%;
	background-color:#fff;
}
#f1{
	top:282px;
	height:250px;
	position:fixed;
}
#below{
	height:100px;
	width:70%;
	background-color:#fff;
	
}
#b1{
	top:535px;
	position:fixed;
	height:120px;
}
#t1{
	background-color:gray;
}
#t2{
	background-color:gray;
}
#t3{
	background-color:gray;
}
#image{
	width:40%;
	height:480px;
	background-color:red;
	position:fixed;
	top:105px;
	left:810px;
}
body{
	margin:0px;
}
</style>
<?php
$r=$_REQUEST["rno"];
$c=mysqli_connect('localhost','root','','csvtu');
$a="select * from results where rno='$r'";
$rs=mysqli_query($c,$a);
echo "<div id='main'><div id='header'><div id='h1'><p id='h11'>Chhattisgarh Swami Vivekananda Technical University</p></div><div id='h2'><p id='h22'>BE IV SEMESTER RESULT</p></div></div><div id='content'><table width='60%' border=1 id='c1'><tr><td id='t1' colspan=3>Personal Details</td></tr><tr><td>Roll no</td><td>";
$row=mysqli_fetch_array($rs);
echo "$row[rno]</td></tr><tr><td>Name</td><td>$row[name]</td></tr><tr><td>Fathers Name</td><td>$row[fathersname]</td></tr></table></div><div id='footer'><table width='60%' border=1 id='f1'><tr><td colspan=2 id='t2'>Marks Details</td></tr><tr><td>SUBJECT</td><td>Marks</td></tr><tr><td>C++</td><td>$row[oops]</td></tr><tr><td>Operating System</td><td>$row[operatingsystem]</td></tr><tr><td>Computer System Architecture</td><td>$row[csa]</td></tr><tr><td>Computational Mathematics</td><td>$row[cm]</td></tr><tr><td>Discrete Mathematics</td><td>$row[dms]</td></tr><tr><td>Data Structure</td><td>$row[ds]</td></tr></table></div><div id='below'><table border=3 width='60%' id='b1'><tr><td id='t3' colspan=2>Final Result</td></tr><tr><td>Total</td><td>$row[totalmarks]</td></tr><tr><td>Percentage</td><td>$row[percentage]</td></tr><tr><td>Result</td><td>$row[result]</td></tr></table></div>";
echo "<div id='image'><img src='$row[image]' height='600px' width='100%'></div></div>"
?>
</body>
</html>