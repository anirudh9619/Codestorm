<!DOCTYPE html>
<html lang="en">
<head>
  <title>My web panda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="icon" type="ICO file" href="panda_ico.ico">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Modak&effect=fire-animation">  
      <link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rancho&effect=3d"> 
      <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">  
     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  
     <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
</head>
<body background="d3.jpg">
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
                document.getElementById('status').innerHTML = 'Please log ' +
                        'into Facebook.';
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
                appId      : '1779431122294859',
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
  </script>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div id="bc" class="container">
  <div class="row">
  <div class="col-md-3 ">
    <img src="vm2.png" height="63px" width="107px">

  </div>
        <div class="col-md-9">
        
            <div id="custom-search-input">
                <div class="input-group col-md-12">
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
      <a class="navbar-brand font-effect-3d" href="#">CodeStorm</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="quora.php">Quora</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="" data-toggle="modal" data-target=".bannerformmodal"><span class="glyphicon glyphicon-edit" ></span> Suggestions</a></li>
        <li><a href="contact.html"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
      <li><img src="" id="profileImage" class="img-circle" alt="" width="50" height="50" style="border:3px solid black;"/></li>
      <li><script>

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  
</script></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" id="bd">
<div class="col-sm-1 col-md-4 col-lg-2" id="bd2">
<nav class="w3-sidenav" id="mySidenav">
 <div class="w3-container">
  <h4>HTML and CSS</h4>
 </div>
 <a href="#">How to design a form</a>
 <a href="#">How to design a nav bar</a>
 <a href="#">How to divide the sections</a>
 <a href="#">How to ....</a>
 <a href="#">How to.....</a>
 <a href="#">How to.....</a>
 <a href="#">How to.......</a>
 <a href="#">Learn how to....</a>
 <div class="w3-container">
  <h4>JavaScript</h4>
 </div>
 <a href="#" color="white">How to add validation</a>
 <a href="#">Slider</a>
 <a href="#">Image Slider</a>
 <a href="#">---------</a>
 <a href="#">Dwfjjjfvj</a>
 <a href="#">------------</a>
 <a href="#">sjgjddnbnnv</a>
 <a href="#">Learn How To...</a>
 <div class="w3-container">
  <h4>PHP</h4>
 </div>
 <a href="#">How to connect with DataBase</a>
 <a href="#">How to fetch Data from DB</a>
 <a href="#">How to add session</a>
 <a href="#">How to fetch Profile image</a>
 <a href="#">hhgdgg</a>
 <a href="#">ggfggfff</a>
 <a href="#">-----------</a>
 <a href="#">------------</a>
 </nav>
</div>
</div>



<div class="col-sm-11 col-md-8 col-lg-10" id="mq2">

<MARQUEE behaviour=alternate id="mq">
<p id="mq" class="font-effect-3d"><img src="ROBO.png"  width="350" height="290"/> Page is under</br> Construction!</p>
</MARQUEE>
</div>

<div class="sidesection" id="right" style="margin-top: 125px;"><h2>post something here   sdgfsgdgfd jdfhgshg</h2>
<div class="col-xs-3 col-xs-offset-8">
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div></div></div>

<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true">
  <div class="modal-dialog modal-md modal-sm modal-lg moodal-xs">
    <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Suggestion Form</h4>
        </div>
        <div class="modal-body">
          <form id="requestacallform" method="POST" name="requestacallform">

            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="first_name" type="text" class="form-control" placeholder="Your Name" name="name"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input id="email1" type="text" class="form-control" placeholder="Email" name="email1" onchange="validateEmailAdd();"/>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group">
                    
                    <textarea id="message" name ="message" class="form-control" placeholder="Write your valuable suggestion"></textarea>
                </div>
            </div>
         
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
        </div>        
      </div>
  
  </div>
</div>
 
</body>
</html>
