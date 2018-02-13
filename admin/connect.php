<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'codes');
	define('DB_USER','root');
	define('DB_PASSWORD',''); 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
	/* $ID = $_POST['user']; $Password = $_POST['pass']; */
	function SignIn()
	{
		if(!empty($_POST['user']) AND !empty($_POST['pass']))
		{
			session_start(); //starting the session for user profile page
			if(!empty($_POST['user'])) 
			{
				$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
				$query = mysqli_query($con,"SELECT * FROM admin_login where name = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysqli_error($con));
				$row = mysqli_fetch_array($query) or die(mysqli_error($con)); 
				if(!empty($row['name']) AND !empty($row['password'])) 
				{ 
					$_SESSION['name'] = $row['password']; 
					echo "<script type='text/javascript'>alert('Successfully! LogIn')</script>";
					include "a_arena.php";
					}
				else 
				{
					echo "abc";
				}
			}
			else 
			{
				echo "invalid username or password";
			}
		}
		
		else 
		{
			echo "Please enter username or password";
		}
		
	}
if(isset($_POST['submit']))
{ SignIn(); }
 ?>

