<?php
    $dbhost = 'localhost';
    $dbuser='root';
    $dbpass='joss';
    $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql');
    $db=mysql_select_db('lbook') or die("could not connect".mysql_error);
    $title=$_GET["title"];
    $accessno=$_GET["accessno"];
    $author=$_GET["author"];
    $publication=$_GET["publication"];
    $price=$_GET["price"];
    $no=$_GET["no"];
    $result=mysql_query("insert into book_info values('".$title."','".$accessno."','".$author."','".$publication."','".$price."','".$no."')") or die("error in insertion".mysql_error);
?>
<html>
<head>
<title>Books</title>
</head>
<body>	
	<p>
 	<?php
	if($result)
		echo "<center><b>One record inserted sucessfully</b></center>";
	else
		echo "error";
	?>
	</p>
	<p><a href="index.html"><center>HOME</a>|<a href="book.html">BACK</center></a></p>
</body>
</html>


