<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location:../../fbtest.html");

}

?>
<?php
require "_config.php";
$con = connect();
?>
<?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    $adsearch = null;

    if(isset($_POST["insearch"]))
    {
        $adsearch = $_POST["insearch"];
    }
    if(isset($_GET["insearch"]))
    {
        $adsearch = $_GET["insearch"];
    }
?>
<html>
    <head>
        <title>Search Results
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="styleindex.css"/>
        <link rel="stylesheet" href="style1.css"/>
        <link rel="stylesheet" href="styleindex.css"/>
        
       <link rel = "stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <style>
        #web{
            font-size : 25px;
        }
       </style>
    </head>
   
    <body>
    <!--Navigation Section-->
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="../index.php" class="navbar-brand" id="web"><b>Codestorm</b></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    
                    <ul class="nav navbar-nav">
                        <li  class="active">
                            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                       
                
                <li><a href="index-Ad.php">Sell/Buy/Post</a></li>
                <li><a href="../quora.php">Quora</a></li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
            <li><a data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions</a></li>
            <li><a href= "../contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a></li>
            <li><img src="user.png"  class="img-circle" alt="" width="50" height="50" /></li>
       
      <li style="color:red;"><?php echo $_SESSION['login'];?></li>
      <li>
      <a href="logout.php">Log Out
    </a></li>
        </ul>
        <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
        </div>
    </div>
</div>
</nav>
        
<!-- nav section end-->
<div class="container">
<br><br><br>
<div class="row">
<div class="col-md-12">

    <div class="alert alert-info"><h1 align="center"><b>
    Search Results
</b></h1>
</div>
</div>
</div>
<br>
<div class="row" >

<?php
$sql_recent = "SELECT * FROM adtable  WHERE LOWER(ad_title) LIKE LOWER('%".$adsearch."%') ";
$query = $con->query($sql_recent);
$num_rows = mysqli_num_rows($query);
$per_page = 12;   // Per Page
    $page  = 1;
    
    if(isset($_GET["Page"]))
    {
        $page = $_GET["Page"];
    }

    $prev_page = $page-1;
    $next_page = $page+1;

    $row_start = (($per_page*$page)-$per_page);
    if($num_rows<=$per_page)
    {
        $num_pages =1;
    }
    else if(($num_rows % $per_page)==0)
    {
        $num_pages =($num_rows/$per_page) ;
    }
    else
    {
        $num_pages =($num_rows/$per_page)+1;
        $num_pages = (int)$num_pages;
    }
    $row_end = $per_page * $page;
    if($row_end > $num_rows)
    {
        $row_end = $num_rows;
    }
$sql = "SELECT * FROM adtable WHERE LOWER(ad_title) LIKE LOWER('%".$adsearch."%') ORDER BY ad_entry DESC LIMIT $per_page OFFSET $row_start ";
    $sql_res=$con->query($sql);
 if($sql_res->num_rows>0){
while($sql_row = $sql_res->fetch_assoc())
{

    ?>
<!--if ($sql_res->num_rows > 0) {
while ($sql_row = $sql_res->fetch_assoc()) {
$id = $sql_row["ad_id"];
$adtitle= $sql_row["ad_title"];
$adname= $sql_row["name"];
$price= $sql_row["price"];
$picid= $sql_row["pics"];
?>-->
<a href="addes.php?id=<?php echo $sql_row["ad_id"]; ?>">
<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <div class="fill" style="height:300px; width:100%;">
            <img src="uploads/<?php echo $sql_row["pics"]; ?>" alt="<?php echo $sql_row["ad_title"]; ?>" ></img>
        </div>
        <div class="caption" id="capt">
                                <h3><b>Item: &nbsp;</b>
                                 <?php echo $sql_row["ad_title"]; ?>
                                 </h3>
                                <h3><b>Price: &nbsp;</b>
                                    <?php echo $sql_row["price"];?> 
                                </h3>
                                <h3><b>By: &nbsp;</b>
                                 <?php echo $sql_row["name"]; ?>
                                 </h3>
                            </div>
    </div>
</div>
</a>
<?php


}
?>
</div>
<div align="center">
<ul class="pagination pagination-lg" >

<?php
if($prev_page)
{
    echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&insearch=$adsearch'><b > Back</b></a></li> ";
}

for($i=1; $i<=$num_pages; $i++){
    if($i != $page)
    {
        /*echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i&insearch=$adsearch'>$i</a> </li>";*/
    }
    else
    {
        /*echo "<li> $i </li>";*/
    }
}
?>

<?php
if($page!=$num_pages)
{
    echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&insearch=$adsearch'><b>Next</b></a></li> ";
}

}
else
echo '<h2 align="center">Sorry no results found!</h2>';

?>
</ul>
</div>
</div>
<br><br><br>
</body>
</html>
<!--suggestion modal starts-->
<div class="modal fade modal-md" id="sugmodal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<!--modal header-->
<div class="modal-header" style="padding:25px 25px;">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4><span class="glyphicon glyphicon-paperclip"></span>&nbsp;Give Your Suggestion!!</h4>
</div>
<!--modal header ends-->
<!--modal body starts-->
<div class="modal-body" style="padding:40px 50px;">
<form role="form" method="post" action="suggestion.php" enctype="multipart/form-data">
    <!--name-->
    <div class="form-group" align="left">
        <label for="name">
            <span class="glyphicon glyphicon-user"></span>
            Your Name
        </label>
        <input type="text" class="form-control" name="yname" id="name" placeholder="Enter your name" required="required">
    </div>
    <!--suggestion-->
    <div class="form-group" align="left">
        <label for="suggest"><span class="glyphicon glyphicon-comment"></span>
        &nbsp;Suggestion
    </label>
    <textarea class="form-control" name="suggestion" rows="6" id="suggest" placeholder="Max length 500 characters" required="required" ></textarea>
</div>
<!--contact-->
<div class="form-group" align="left">
    <label for="conta">
        <span class="glyphicon glyphicon-phone"></span>
        Your Contact
    </label>
    <input type="text" class="form-control" name="contact" id="conta" placeholder="Enter your contact/FB profile link/Email" required="required">
</div>
<div class="modal-footer">
    <button type="submit" name="adsug" class="btn btn-success btn-default pull-right">
    <span class="glyphicon glyphicon-flag"></span>
    Submit
    </button>
    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
    <span class="glyphicon glyphicon-remove"></span>
    Cancel
    </button>
</form>
</div>
</div>
<!--modal body ends-->
</div>
</div>
<!--suggestion modal ends-->
<?php
$_SESSION["errora"] =0;
$_SESSION["errorb"] =0;
if($_SESSION["errora"])
{echo '<script type="text/javascript">',
'alert("Thanks!! Submitted successfully")',
'</script>'
;
$_SESSION["errora"] = 0;
}
?>
<?php
if($_SESSION["errorb"])
{echo '<script type="text/javascript">',
'alert("Submission Error!!!")',
'</script>'
;
$_SESSION["errorb"] = 0;
}
?>
