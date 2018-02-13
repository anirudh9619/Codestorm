<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quora</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Modak&effect=fire-animation">  
      <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rancho&effect=3d"> 
      <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">  
     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
     <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
</head>
<body background="d3.jpg">
<div class="se-pre-con"></div>
<script type="text/javascript">
  $(window).load(function() {
    
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
<script>
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
               window.location="fbtest.html";
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


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=681900011984018";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

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
        window.location="fbtest.html";
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
  background: url(images/loader.gif) center no-repeat #fff;
}
</style>
<!-- navigation bar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div id="bc" class="container">
  <div class="row">
  <div class="col-md-3 ">
    <img src="vm2.png" height="63px" width="107px">
    
  </div>
        <div class="col-md-9">
        
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand font-effect-3d" href="#">Codestorm</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        
        <li><a href="ad/index-Ad.php">Sell/Buy/Post</a></li>
        <li><a href="quora.php">Quora</a></li>
        <li><a href="cart/index.php">Online Material</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="" data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit"></span> Suggestions</a></li>
        <li><a href="contact.html"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
        <li><img src="" id="profileImage" class="img-circle" alt="" width="50" height="50" /></li>
       
      <li id="username" style="color:white;"></li>
      &nbsp&nbsp&nbsp
      <fb:login-button size="small" onlogin="RedirectLogon();" perms="email,user_birthday" autologoutlink="true">
    logout
</fb:login-button></li>
      </ul>
    </div>
  </div>
</nav>
<!-- facebook plugin -->
<div class="container" style="
    margin-left: 120px; 
    margin-top:  110px; background-color: white;" >
  
  <div class="row">
  <div class="col-md-6">
<div class="fb-comments" data-href="http://localhost/project%20m/quora.php" data-width="580" data-numposts="3"></div>
</div>

<div class="container">
<div class="col-md-6">
<div class="fb-page" id="fp" data-href="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel" data-tabs="timeline" data-width="260" data-height="140" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel">Codestorm</a></blockquote></div>
</div>
</div>
</div>
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
<button type="submit" name="adsug" onclick="call();" class="btn btn-success btn-default pull-right">
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
</body>
</html>
