<?php

define('DB_HOST','localhost');
define('DB_NAME','codes');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("unable to connect");
$db=mysqli_select_db($con,DB_NAME) or die("failed to connect to mysql: " . mysqli_error($con));




$email=$_POST['email']; 
	$contact=$_POST['contactno'];
	$message=$_POST['message'];

$sql="select * from signup where email=\"$email\"";
$query = "INSERT INTO fogot (email,contactno,message) VALUES ('$email','$contact','$message')";
$rs=mysqli_query($con,$sql) or die (mysqli_error($con));
	 $rows=mysqli_num_rows($rs);

	if($rows!=0)
	{
		$data = mysqli_query ($con,$query)or die(mysqli_error($con));
		echo "<script>alert('we will contact you soon...');window.location.href='fbtest.html';</script>";
	}
	else{
		echo "<script>alert('you are not registered');window.location.href='fogpass.html';</script>";
	}
	?>

