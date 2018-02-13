<?php
require '_config.php';
$con = connect();
session_start();
$_SESSION["error"] =0;
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
if($_SESSION["error"])
{echo '<script type="text/javascript">',
'alert("Worng Details")',
'</script>'
;
$_SESSION["error"] = 0;
}
?>
<html>
    <head>
        <title>Sell/Buy/Post
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
        <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rancho&effect=3d"> 
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="styleindex.css"/>
        <link rel="stylesheet" href="style1.css"/>
        <link rel = "stylesheet" href="footer.css"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
       <style>
        #web{
            font-size : 25px;
        }
       </style>
        
    </head>
    
    <body>
    <div class="se-pre-con"></div>
<script type="text/javascript">
  $(window).load(function() {
    
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
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
  <style type="text/css">
  .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(loader.gif) center no-repeat #fff;
}
</style>
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
                        <li  class="">
                            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                        
                <li>
                    <a href="index-Ad.php">Sell/buy/Post</a>
                </li>
                <li><a href = "../quora.php" >Quora</a>
            </li>
            <li><a href = "../quiz.php" >Quiz</a>
            </li>
            <li><a href = "../cart/index.php" >Online Material</a>
            </li>

            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
            <li><a href="" data-toggle="modal" data-target="#sugmodal" ><span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions</a></li>
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
<!-- nav section end-->
       
<!-- nav section end-->
<!-- Carousel Content -->
<div class="container-fluid" style="padding-bottom:10px; padding-left:0px; padding-right:0px;">
<!-- First Featurette -->

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay">
            
            <!-- Wrapper for slides -->
            
            <div class="carousel-inner">
                
                <div class="item slides active " id="slide1">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>CODESTORM</h1>
                        <h2>BUY/SELL/POST</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides " id="slide2">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>CODESTORM</h1>
                        <h2>BUY/SELL/POST</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides" id="slide3">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>CODESTORM</h1>
                        <h2>BUY/SELL/POST</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                <div class="item slides " id="slide4">
                    <div class="slide-4"></div>
                    <div class="hero">
                        <hgroup>
                        <h1>CODESTORM</h1>
                        <h2>BUY/SELL/POST</h2>
                        <h3><b>Let all know what you have</b></h3>
                        </hgroup>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your Ad</button>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
<!-- Ads  Area-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#AN" aria-controls="AN" role="tab" data-toggle="tab"><h4>Recently Added</h4></a></li>
                    <li role="presentation"><a href="#LE" aria-controls="LE" role="tab" data-toggle="tab"><h4>Books</h4></a></li>
                    <li role="presentation"><a href="#TB" aria-controls="TB" role="tab" data-toggle="tab"><h4>Photostates</h4></a></li>
                    <li role="presentation"><a href="#GS" aria-controls="GS" role="tab" data-toggle="tab"><h4>Notes</h4></a></li>
                    <li role="presentation"><a href="#NA" aria-controls="NA" role="tab" data-toggle="tab"><h4>Softwares</h4></a></li>
                    <form class="navbar-form navbar-right" action="searchindex.php"s role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Ads" name="insearch" />
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                </ul>
                <br>
                <!-- Tab panes-->
                <div class="tab-content">
                    <!--recently added-->
                    <div role="tabpanel" class="tab-pane active" id="AN">
                        
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable ORDER BY ad_entry DESC LIMIT 4";
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
                                            <img src="uploads/<?php echo $picid ?>" alt="<?php echo $adtitle ?> "height="300px" width="308px" class="w3-hover-opacity img-responsive">
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
                            }
                            ?>
                        </div>
                        <!--
                        view more Button
                        -->
                        <a href="catdis.php"  name="adform"  class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    
                    <!-- books panel-->
                    <div role="tabpanel" class="tab-pane" id="LE">
                        <!--tab advertisements-->
                        
                        
                        <div class="row">
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 1 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
                            $adtitle= $sql_row["ad_title"];
                            $adname= $sql_row["name"];
                            $price= $sql_row["price"];
                            $picid= $sql_row["pics"];
                            $adid= $sql_row["ad_id"];
                            ?>
                            
                            <a href="addes.php?= <?php echo $adid?>">
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
                            }
                            ?>
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=1"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                    </div>
                    
                    
                    
                    
                    <!--photostates-->
                    <div role="tabpanel" class="tab-pane" id="TB">
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 2 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
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
                            }
                            ?>
                            
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=2"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    <!--games-->
                    <div role="tabpanel" class="tab-pane" id="GS">
                        <!--tab advertisements-->
                        <div class="row" >
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 3 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
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
                            }
                            ?>
                        </div>
                        <!--
                        view more Button
                        -->
                        
                        <a href="catdis.php?cat=3"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                    </div>
                    
                    
                    
                    <!--electronics-->
                    <div role="tabpanel" class="tab-pane" id="NA">
                        <!--tab advertisements-->
                        <div class="row" >
                            
                            
                            <?php
                            $sql_recent = "SELECT * FROM adtable WHERE category = 4 ORDER BY ad_entry DESC LIMIT 4";
                            $sql_res = $con->query($sql_recent);
                            if ($sql_res->num_rows > 0) {
                            while ($sql_row = $sql_res->fetch_assoc()) {
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
                            }
                            ?>
                            
                            <!--
                            view more Button
                            -->
                        </div>
                        <a href="catdis.php?cat=4"  name="adform" class="btn btn-success btn-default pull-right">View All Ads</a>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
	</div>
<br><br>
<!--footer md starts-->



<!--imex modal-->
<div class="modal fade modal" id="imexmodal" role="dialog">
    <div class="modal-dialog modal-md modal-sm modal-lg moodal-xs">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:25px 25px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-envelope"></span>&nbsp;Post your Ad!!</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                
                
                <form role="form" method="post" action="adpost.php" enctype="multipart/form-data">
                    <!--ad title-->
                    <div class="form-group" align="left">
                        <label for="username">
                            <!--<span class="glyphicon glyphicon-user"></span>-->
                            Ad title
                        </label>
                        <input type="text" class="form-control" name="adt" id="usrname" placeholder="Enter the title for your ad" required="required">
                    </div>
                    <!--ad category-->
                    <div class="form-group" align="left">
                        <label for="Category">
                            <!--<span class="glyphicon glyphicon-user"></span>-->
                            Category
                        </label>
                        <select name="cat" class="form-control">
                            <option value="1">Books</option>
                            <option value="2">Photostates</option>
                            <option value="3">Notes</option>
                            <option value="4">Softwares</option>
                        </select>
                    </div>
                    
                    
                    <!--ad description-->
                    <div class="form-group" align="left">
                        <label for="comment"><!--<span class="glyphicon glyphicon-comment"></span>-->
                        &nbsp;Description
                    </label>
                    <textarea class="form-control" name="desc" rows="4" id="comment" placeholder="Max length 400 characters" required="required" ></textarea>
                </div>
                <!--ad price-->
                <div class="form-group" align="left">
                    <label for="price"><!--<span class="glyphicon glyphicon-comment"></span>-->
                    &nbsp;Price
                </label>
                <input type="number" name="cost" class="form-control" id="price" placeholder="Enter the price here" required="required">
            </div>
            <!--photo upload-->
            <div class="form-group" align="left">
                <label for="photo"><!--<span class="glyphicon glyphicon-comment"></span>-->
                &nbsp;Photo
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" name="image" id="photo" value="pic" required="required">
        </div>
        <!--name-->
        <div class="form-group" align="left">
            <label for="name"><!--<span class="glyphicon glyphicon-comment"></span>-->
            &nbsp;Name
        </label>
        <input type="text" name="adname" class="form-control" id="name" placeholder="Enter your name here" required="required">
    </div>
    <!--contact-->
    <div class="form-group" align="left">
        <label for="conta"><!--<span class="glyphicon glyphicon-comment"></span>-->
        &nbsp;Contact
    </label>
    <input type="number" name="con"class="form-control" id="conta" min="1000000000" max="9999999999" placeholder="Contact Number should be less than 10 digits" required="required">
</div>
<!--fb profile link-->
<div class="form-group" align="left">
    <label for="fb"><!--<span class="glyphicon glyphicon-comment"></span>-->
    &nbsp;Fb profile link
</label>
<input type="text" name="fb" class="form-control" id="fb" placeholder="https://www.facebook.com/anuraj.singh.10" required="required">
</div>
</div>
<div class="modal-footer">
<button type="submit" name="adform" class="btn btn-success btn-default pull-right">
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
</div>
</div>
<!--imex modal ends-->
<!--suggestion modal starts-->
<div class="modal fade modal" id="sugmodal" role="dialog">
<div class="modal-dialog modal-md modal-sm modal-lg moodal-xs">
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
</body>
</html>