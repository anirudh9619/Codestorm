<?php
require "_config.php";
$con = connect();
session_start();
global $catid;
global $catv;

if (isset($_GET['cat'])) {
$catid = " WHERE category = ".$_GET['cat'];
$catv = $_GET['cat'];

}

?>
<html>
    <head>
        <title>Category Display
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rancho&effect=3d">
        <link rel="stylesheet" href="styleaddes.css"/>
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
    <script>
  

        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into this app.';
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
               window.location="../fbtest.html";
            }
        }

        // This function is called when someone finishes with the Login
        // Button.  See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

        window.fbAsyncInit = function() {
            FB.init({
                appId      : '681900011984018',
                cookie     : true,  // enable cookies to allow the server to access
                                    // the session
                xfbml      : true,  // parse social plugins on this page
                version    : 'v2.5' // use graph api version 2.5
            });

            // Now that we've initialized the JavaScript SDK, we call
            //FB.getLoginStatus().  This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide.  They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            //    your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });

        };

        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful.  See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
                console.log('Successful login for: ' + response.name);
                console.log('Successful login for: ' + response.id);
                console.log('Successful login for: ' + response.email);
                var im = document.getElementById("profileImage").setAttribute("src", "http://graph.facebook.com/" + response.id + "/picture?type=normal");
                document.getElementById('username').innerHTML =response.name;
            });
        }
       function RedirectLogon(){
        window.location="../fbtest.html";
       }
  </script>
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
                    <a href="../index.php" class="navbar-brand font-effect-3d" id="web"><b>Codestorm</b></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    
                    <ul class="nav navbar-nav">
                        <li  class="active">
                            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                    
                
                <li><a href="../quora.php">Quora</a></li>
                <li><a href="index-Ad.php">Sell/Buy/Post</a></li>

           
            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
            <li><a data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions</a></li>
            <li><a href= "../contact.html"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Contact Us</a></li>
            <li><img src="" id="profileImage" class="img-circle" alt="" width="50" height="50" /></li>
       
      <li id="username" style="color:whitesmoke;"></li>
      <li>&nbsp&nbsp&nbsp
      <fb:login-button size="small" onlogin="RedirectLogon();" perms="email,user_birthday" autologoutlink="true">
    logout
</fb:login-button></li>
        </ul>
        <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
        </div>
    </div>
</div>
</nav>
        
<div class="container">
<!-- nav section end-->
<br><br><br>
<h3>
<?php




if ($catid == "") {
?><div class="alert alert-info"><h1 align="center"><b>
Recent Ads</b></h1></div>
<?php
} else {
$sql_cat = "SELECT * FROM category WHERE cat_id = {$_GET['cat']}";
$cat_res = $con->query($sql_cat);
$cat_row = $cat_res->fetch_assoc();

?>
<div class="alert alert-info"><h1 align="center"><b>
<?php
echo $cat_row['cat_name'];

?>
</b></h1></div>

<?php
}
?>
<div class="row" >



<?php
$sql = "SELECT * FROM adtable {$catid}";
$query = $con->query($sql);
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



$sql_recent = "SELECT * FROM adtable {$catid}  ORDER BY ad_entry DESC LIMIT $per_page OFFSET $row_start";

$sql_res = $con->query($sql_recent);
if ($sql_res->num_rows > 0) {
while ($sql_row = $sql_res->fetch_assoc()) {
$id = $sql_row["ad_id"];
$adtitle= $sql_row["ad_title"];
$adname= $sql_row["name"];
$price= $sql_row["price"];
$picid= $sql_row["pics"];
?>
<a href="addes.php?id=<?php echo $id; ?>">
<div class="col-md-3 col-sm-6">
    <div class="thumbnail">
        <div class="fill" style="height:300px; width:100%;">
            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?>">
        </div>
        <div class="caption" id="capt">
                                <h3><b>Item: &nbsp;</b>
                                 <?php echo $adtitle?>
                                 </h3>
                                <h3><b>Price: &nbsp;</b>
                                    <?php echo $price?>
                                </h3>
                                <h3><b>By: &nbsp;</b>
                                 <?php echo $adname?>
                                 </h3>
                            </div>
    </div>
</div>
</a>

<?php
}


?>

</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center">
            <ul class="pagination pagination-lg">

<?php
if ($catid == "") {


    if($prev_page)
{
    echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'><b > Back</b></a></li> ";
}

for($i=1; $i<=$num_pages; $i++){
    if($i != $page)
    {/*
        echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> </li>";
    }
    else
    {
        echo "<li> $i </li>";*/
    }
}
?>

<?php
if($page!=$num_pages)
{
    echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'><b>Next</b></a></li> ";
}

}






else
{

if($prev_page)
{
    echo " <li><a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page&cat=$catv'><b > Back</b></a></li> ";
}

for($i=1; $i<=$num_pages; $i++){
    if($i != $page)
    {
        /*echo "<li><a href='$_SERVER[SCRIPT_NAME]?Page=$i&cat=$catv'>$i</a> </li>";
    }
    else
    {
        echo "<li> $i </li>";*/
    }
}
?>

<?php
if($page!=$num_pages)
{
    echo "<li> <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page&cat=$catv'><b>Next</b></a></li> ";
}

}

}
else
echo '<h2 align="center">Sorry no results found!</h2>';
?>


</ul>
</div>
</div>
</div>
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
    <label for="contact">
        <span class="glyphicon glyphicon-phone"></span>
        Your Contact
    </label>
    <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact/FB profile link/Email" required="required">
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
