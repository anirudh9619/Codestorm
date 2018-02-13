<?php

define('DB_HOST','localhost');
define('DB_NAME','codes');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("unable to connect");
$db=mysqli_select_db($con,DB_NAME) or die("failed to connect to mysql: " . mysqli_error($con)); 

function newuser()
{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("unable to connect");
	$name=$_POST['name'];
	$email=$_POST['email']; 
	$contact=$_POST['contact'];
	$password=$_POST['password'];
	
	$query = "INSERT INTO signup (name,email,contact,password) VALUES ('$name','$email','$contact','$password')";
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	if($data)
	{
		
		echo "<script>alert('Your registration is complete');window.location.href='fbtest.html';</script>";
	}
}
function SignUp()
{
if(!empty($_POST['email']))

{ 	$email=$_POST['email'];

	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("unable to connect");
	$sqll="select * from signup where email=\"$email\"";

$rs=mysqli_query($conn,$sqll) or die (mysqli_error($conn));
	 $rows=mysqli_num_rows($rs);

	if($rows==0)
	{ 
		
		newuser();
	}
	
	else{

		echo "<script>alert('This email is already registered');window.location.href='fbtest.html';</script>";
	}
}
}
if(isset($_POST['adsug']))
{
	SignUp();
}
?>


