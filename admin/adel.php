

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
        $uid = $_POST['uid'];
            
            $sql = "DELETE FROM adtable WHERE ad_id = '$uid'" ;


if ($conn->query($sql) === TRUE) {
   echo "<script type='text/javascript'>alert('Record Deleted')</script>";
include "a_arena.php";

   } 
else
{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

