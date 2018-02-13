<?php


     
     $email=$_POST['email'];
	 $password=$_POST['password'];
	 $login=$_SERVER['HTTP_REFERER'];

	
	 if((!$email) or (!$password)) 
	 {
	 header("Location:afterlogin/index.php");
	 exit();
	 
	 }
	 
	 $conn=mysqli_connect("localhost","root","") or die("can't connect");
	 $rs=mysqli_select_db($conn,"codes") or die("DB ERROR");
	 $sql="select * from signup where email=\"$email\" and password=\"$password\"";
	 $rs=mysqli_query($conn,$sql) or die ("could n't ...");
	 $rows=mysqli_num_rows($rs);
	 if($rows!=0)
	 {
	 	session_start();
         $_SESSION['login'] = $email;
		 //echo"<h2> $user u are logged in...</h2>";
	 header("Location:afterlogin/index.php");
	 }
	 else
	 {
	 	header('Location:loginwrong.html');

 // echo'<p style="color:red;">WRONG PASSWORD OR EMAIL PLEASE TRY AGAIN BY GOING BACK......</p>';

	//echo'<button><a href="fbtest.html" style="text-decoration:none;">Click to go back again.....</a></button>'; 
	 exit();
	
	 }
?>	 
