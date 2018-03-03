<html>
<body>
<style>
#main{
	width:100%;
	height:1000px;
	background-color:#fff;
}
#header{
	height:150px;
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
font-size:40px;}
#h2{
position:fixed;
top:70px;
left:500px;	
}
#h22{
	color:black;
	font-size:25px;
}
body{
	margin:0px;
}
#footer{
	background-color:#fff;
	height:850px;
	width:100%;
	position:fixed;
	top:150px;
}
#table{
	position:fixed;
	top:300px;
	left:400px;
}
</style>
<form action="csvtu.php" method="post" enctype="multipart/form-data">
<div id="main">
<div id="header">
<div id='h1'><p id='h11'>Chhattisgarh Swami Vivekananda Technical University</p></div><div id='h2'><p id='h22'>BE IV SEMESTER RESULT</p></div>
</div><div id="footer"><div id="table"><table height=90px><tr><td>
ENTER ROLL NO:</td><td><input type="text" name="rno"></td></tr><tr><td>
<input type="submit" name="b1" value="find your result"></td></tr></table></div></div></div>
</form>