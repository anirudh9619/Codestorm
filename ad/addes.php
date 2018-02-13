<?php
require "_config.php";
$con = connect();
session_start();
  
    

if(isset($_GET['id'])) {
?>

<html>
	<head>
		<title>Ad Description
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
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
                        <li  class="">
                            <a href="../index.php"><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                       

            <li>
                <a href = "../quora.php">Quora
                </a>
                <li>
                    <a href="index-Ad.php">Sell/Buy/Post</a>
                </li>
                
            
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:10px">
            <li><a href="" data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit"></span>&nbsp;Suggestions</a></li>
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
		
<br><br><br>
<!--add desricption-->
<div class="container-fluid">
<div class="row">


<?php

	$sql_ad = "SELECT * FROM adtable WHERE ad_id = {$_GET['id']}";
	$sql_res = $con->query($sql_ad);
	if($sql_res->num_rows > 0) {
		$sql_row = $sql_res->fetch_assoc();
		$adtitle = $sql_row["ad_title"];
		$adname= $sql_row["name"];
		$price= $sql_row["price"];
		$addes= $sql_row["description"];
		$fb_link = $sql_row["fb"];
		$catid = $sql_row["category"];
		$adid= $sql_row["ad_id"];
		$picid= $sql_row["pics"];
		
		$sql_cat="SELECT * FROM category WHERE cat_id = {$catid}";
		$sql_res_cat = $con->query($sql_cat);
		$sql_row = $sql_res_cat->fetch_assoc();
		$catname= $sql_row["cat_name"];
		
		


?>
<div class="col-md-4 col-xs-12">
<div class="dill">
<img src="uploads/<?php echo $picid ?>" hspace="10px" alt="<?php echo $adtitle ?>">
</div>
</div>

<div class="col-md-8 col-xs-12">
<div class="panel panel-success">
      <div class="panel-heading"><h1 align="center"><b><?php echo $adtitle; ?></b></h1></div>
      <div class="panel-body">
      	<h3><b>Owner :&nbsp;</b><?php echo $adname;?></h3>
      	<h3><b>Category :&nbsp;&nbsp;</b><?php echo $catname;?></h3>
      	<h3><b>Description :&nbsp;</b><?php echo $addes;?></h3>
      	<h3><b>Price :&nbsp;</b><?php echo $price;?></h3>
      	<h3><b>Contact on <a href="<?php echo $fb_link ?>" target="_blank" class="hPrepathonFacebook">
                          <i class="fa fa-facebook fa-2x"></i></a></b></h3>


	<p align="right"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#editmodal">Edit this Ad</button>
	</p>
	

	</div>
    </div>
	

</div>
</div>

</div>

<?php
	if(isset($_GET["disp"])) {
?>
<br><br>
<div class="alert alert-danger" align="center">
Your ad has been successfully posted. Note down the following token for editing in future purposes<br>
<b>Token : <strong><?php echo $_GET["disp"]; ?></strong></b>
</div>
<?php
	}
}
else {
?>
<h1 align="center">Sorry!! No ad found</h1>
<?php
}
?>

<!--edit modal box starts-->
<div class="modal fade" id="editmodal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
	<div class="modal-header" style="padding:35px 50px;">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4><span class="glyphicon glyphicon-envelope"></span>&nbsp;Verify Your Token!!</h4>
	</div>
	<div class="modal-body" style="padding:40px 50px;">
		
		
		<form role="form" method="get" action="adedit.php">
			<div class="form-group" align="left">
				<label for="etoken">&nbsp;Token Number
				</label>
				<input type="hidden" name="id" value="<?php  echo $_GET['id'];?>">
				<input type="text" name="token" class="form-control" id="etoken" placeholder="Enter your token here" required>
			</div>
			
			<button type="submit" name="tsubmit" class="btn btn-success btn-block">
			<span class="glyphicon glyphicon-flag"></span>
			Submit
			</button>
		</form>
		
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
		<span class="glyphicon glyphicon-remove"></span>
		Cancel
		</button>
	</div>
</div>
</div>
</div>
<!--edit modal box ends-->
<br><br><br>
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
								<div class="dill" style="height:300px; width:100%;">
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
				<a href="catdis.php" class="btn btn-success btn-default pull-right">View All Ads</a>
				
				
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
				<a href="catdis.php?cat=1" class="btn btn-success btn-default pull-right">View All Ads</a>
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
				<a href="catdis.php?cat=2"   class="btn btn-success btn-default pull-right">View All Ads</a>
				
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
				
				<a href="catdis.php?cat=3"  class="btn btn-success btn-default pull-right">View All Ads</a>
				
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
				<a href="catdis.php?cat=4"  class="btn btn-success btn-default pull-right">View All Ads</a>
				
				
			</div>
			
		</div>
		<!--tab content ends-->
	</div>
	<!--card ends-->
</div>
</div>
</div>
<br><br>
</body>

</html>
<?php
	} else {
			header("location: index.php");	#redirected if id not give...
	}?>

	<?php	
if($_SESSION["error"]) 
   {echo '<script type="text/javascript">',
     'alert("Worng Details")',
     '</script>'
    ; 
       $_SESSION["error"] = 0;
     } 
     ?>
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
