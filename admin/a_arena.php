<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'codes'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn)
{
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$sql = 'SELECT * 
		FROM fogot';
$query = mysqli_query($conn, $sql);
if (!$query) 
{
	die ('SQL Error: ' . mysqli_error($conn));
}
function dlete()
{
	$sql = "DELETE FROM fogot WHERE first_name='$_POST[uid]'";
	if(mysqli_query($link, $sql)){
		echo "Records were deleted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

}
?>
<html>
<head>
<title>Codestorm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr.custom.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
      <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rancho&effect=3d"> 
      <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">  
     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
     <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">

	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		a {
    text-shadow: 0 0 3px #FF0000;
}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: left;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: left;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
		.action-button
{
	
	align:center;
	position: relative;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 10px;
	font-family: 'Pacifico', cursive;
	font-size: 25px;
	color: #FFF;
	text-decoration: none;	
}

.blue
{
	background-color: #3498DB;
	border-bottom: 5px solid #2980B9;
	text-shadow: 0px -2px #2980B9;
}

.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
	</style>
</head>
<body>
	<h1>Complains by user</h1><br>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>Email-ID</th>
				<th>Contact no.</th>
				<th>Message</th>
				<th>Delete</th>
				</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$row['email'].'</td>
					<td>'.$row['contactno'].'</td>
					<td>'.$row['message'].'</td>';
					?>
					<td><input type="button" value="Delete" onclick="window.location.href='deleteprofile1.php?id= <?php echo $row['email'];?>'" /></td>
					<?php
					/*<form action="deleteprofile.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row['email'];?>"/>
					<input type="button" value="Delete" name="delete" /></form>*/
				echo '</tr>';
		}?>
		</tbody>
		
	</table>
	<br>
	<center>
<a href="logout.php">Logout</a></center>
</body>
</html>
