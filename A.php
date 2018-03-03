//using form tag we decide date to be submitted in which page at server side
//name attribute is used instead of id at server side
//in this php tag is not necessary bcz no php symbols been used here.
//submit is used instead of button at serverside and wrks with action
//here it is optional to save either from .html or from .php
//two types of method is used get nd post by default is get, for secure data post is used.
//get==bind with url,only ascii is passed with get,ndmax 256 characters can be passed also depend upon browser,also saved in history 
//to retrieve data in php three arrays are used namely $_GET[],$_POST,$_REQUEST,ALSO ASSOCIATED ARRAY IS USED. 

<form action="B.php" method="get">
<input type="text" name="t1">
<input type="submit" value="ok">
</form></body>

