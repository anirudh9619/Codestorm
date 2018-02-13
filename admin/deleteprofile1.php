
<?php
//$id = $_POST['id'];
$id=$_REQUEST['id'];
//echo "your email id is ".$id;
$link = mysqli_connect("localhost", "root", "", "codes");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "DELETE FROM fogot WHERE email='".$id."'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
	include 'a_arena.php';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
//include 'connect.php';

?>