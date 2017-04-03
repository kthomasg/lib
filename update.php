<?php
        $dbhost='localhost';
        $dbuser='root';
        $dbpass='joss';
        $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to
 mysql');
        $db=mysql_select_db('lbook') or die("could not connect".mysql_error);
        $accessno=$_POST["accessno"];
        $result=mysql_query("delete from book_info where accessno='".$accessno."
echo "Hello"
'") or die("Error in selection".mysql_error);
?>
<html>
<head>
<title>edit</title>
</head>
<body>
<div align="center">
        <form name="form1" method="post" action="update_form.php">
                <table width="248" height="258" border="0">
                        <tr>
                          <td height="124"><strong>edit details</strong>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                                <td width="121">Access No</td>
                                <td width="111">
                                    <select name="accessno">
                                        <?php
                                                while($row=mysql_fetch_array($result)){
                                                        echo "<option value=\"$row[1]\">$row[1]</option>";
					     ?>
                                    </select>
                                </td>
                        </tr>
                        <tr>
                        <td height="124">&nbsp;</td>
                        <td><input type="submit" name="submit" value="update"></td>
                        <tr>
                </table>
        </form>
</div>
</body>
</html>





