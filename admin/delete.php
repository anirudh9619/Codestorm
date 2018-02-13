<html>
<head>
<title>CodeStorm</title>
</head>
<body>

<h3>Enter Email ID to delete</h3>

<?php
if(isset($_POST['delete']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$employeeid = $_POST['eid'];

$sql = "DELETE fogot ".
       "WHERE email = $employeeid" ;

mysql_select_db('codes');
$retval = mysql_query($conn,$sql );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="eid" type="text" id="employeeid"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
</html>