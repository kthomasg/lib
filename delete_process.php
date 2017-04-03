<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='joss';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
	$db=mysql_select_db('lbook') or die("could not connect".mysql_error);
	$accessno=$_POST["accessno"];
	$result=mysql_query("delete from book_info where accessno='".$accessno."'") or die("Error in selection".mysql_error);
?>
<html>
<head>
<title>delete</title>
</head>
<body>
<?php
	if($result)
		echo"<center><b>one record deleted successfuly</b></center>";
	else
 		echo"error";
?>
<p><a href="index.html"><center>Home</a>|<a href="delete.php">back</center></a></p>
</body>
</html>

	 	
