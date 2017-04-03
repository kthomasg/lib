<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='joss';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('error connecting to mysql');
	$db=mysql_select_db('lbook') or die("could not connect".mysql_error);
	$accessno=$_POST["accessno"];
	if($accessno="all")
		$result=mysql_query("select * from book_info") or die("error in selection".mysql_error);
	else
		$result=mysql_query("select * from book_info where accessno='".$accessno."'") or die("error in selection".mysql_error);
?>
<html>
<head>
	<title>Display</title>
</head>
<body>
	<?php
		echo "<table width=\"100%\" height=\"10%\" border=\"1\" align=\"center\">
			<tr>
			<td><strong>Book Title</strong></td>
			<td><strong>Access No.</strong></td>
			<td><strong>Author</strong></td>
			<td><strong>Publication</strong></td>
			<td><strong>Price</strong></td>
			<td><strong>No. of copies</strong></td>
			<tr>  ";
		while($row=mysql_fetch_array($result))
		{
			echo "     <tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td>$row[5]</td>	
				   <tr>	  ";
		}
		echo "</table>";
	?>
	<p><a href="index.html"><center>Home</a>|<a href="display.php">back</center></a></p>
</body>
</html>

