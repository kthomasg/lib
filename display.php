<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='joss';
	$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting mysql');
	$db=mysql_select_db('lbook') or die("could not connect".mysql_error());
	$result=mysql_query("select * from book_info")  or die("error in insertion".mysql_error());
?>
<html>
<head>
<title>Display</title>
</head>
<body>
	<div align="center">
	<form name="form1" method="post" action="display_process.php">
		<table width="248" height="258" border="0">
		<tr>
		<td height="124"><strong>Display Details</strong></td>
		<td></td>
		</tr>
		<tr>
		<td width="121">Access no.</td>
		<td width="111">
			<select name="accessno">
			<?php
				while($row=mysql_fetch_array($result))
				{
					echo "<option value=\"$row[1]\"row[1]</option>";
				}
			?>
			<option value="all">All</option>
			</select>
		</td>
		</tr>
		<tr>
			<td height="124">&nbsp;</td>
			<td><input type="submit" name="submit" value="display"></td>
		</tr>
		</table>
		</form>
		</div>
</body>
</html>
