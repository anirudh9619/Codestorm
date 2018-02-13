
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codestorm</title>
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
     <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
</head>
<body style="background: url(d3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background:  {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}">

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
            }
            
             else if (response.status === 'not_authorized') {
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

        window.location="fbtest.html";
       }
  </script>
  
<!--
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal4').modal('show');
    });
</script>
<div class="modal fade" id="myModal4">
<div class="modal-dialog modal-md modal-sm modal-lg moodal-xs" style="background-color:white;">
  <div class="modal-header" >
    <a class="close" data-dismiss="modal">×</a>
    <h3>Modal header</h3>
  </div>
  <div class="body" style="background-color:white;">
    <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false">
      Log in with facebook
    </div>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>
</div>-->


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
      
        <li><a href="ad/index-Ad.php">Sell/Buy/Post</a></li>
        <li><a href="quora.php">Quora</a></li>
          <li><a href="quiz.php">Quiz</a></li>
          <li><a href="cart/index.php">Online Material</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="" data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit" ></span> Suggestions</a></li>
        <li><a href="contact.html"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
      <li><img src="" id="profileImage" class="img-circle" alt="" width="50" height="50" /></li>
       
      <li id="username" style="color:whitesmoke;"></li>
      <li>&nbsp&nbsp&nbsp
     <fb:login-button size="small" onlogin="RedirectLogon();" perms="email,user_birthday" autologoutlink="true">
    logout
</fb:login-button>
  
</li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container" style="margin-top: 110px; font-size: 25px; font: bold; color: #000000;">
<text >This is quiz which is totally based on Web designing topic or it may be from some IT subjects.</text>
<form action="http://www.quizbox.com/builder/result.aspx?max=45&q=10" method="post">
<input type="hidden" name="QuizTitle" value="Quiz" />
<input type="hidden" name="QuizReturnLink" value="http://localhost/project%20m/afterlogin/answers.php" />
<ol>
<li >How can you number a list?</li><br />
<input type="radio" name="ans1" value="0"/>dl<br />
<input type="radio" name="ans1" value="5"/>ol<br />
<input type="radio" name="ans1" value="0"/>ul<br />
<input type="radio" name="ans1" value="0"/>list<br /><br />

<li><b> tag makes the enclosed text bold. What is other tag to make text bold?</li><br />
<input type="radio" name="ans2" value="0"/>strong<br />
<input type="radio" name="ans2" value="0"/>dar<br />
<input type="radio" name="ans2" value="5"/>black<br />
<input type="radio" name="ans2" value="0"/>emp<br /><br />

<li>Tags and text that are not directly displayed on the page are written in _____ section. a. <html></li><br />
<input type="radio" name="ans3" value="0"/>html<br />
<input type="radio" name="ans3" value="0"/>title<br />
<input type="radio" name="ans3" value="5"/>head<br />
<input type="radio" name="ans3" value="0"/>body<br /><br />

<li>What should be the first tag in any HTML document?</li><br />
<input type="radio" name="ans4" value="0"/>head<br />
<input type="radio" name="ans4" value="0"/>title<br />
<input type="radio" name="ans4" value="5"/>html<br />
<input type="radio" name="ans4" value="0"/>document<br /><br />

<li>How can you make an e-mail link?</li><br />
<input type="radio" name="ans5" value="5"/>a href="mailto:xxx@yyy"<br />
<input type="radio" name="ans5" value="0"/>mail>xxx@yyy</mail><br />
<input type="radio" name="ans5" value="0"/>mail href="xxx@yyy"<br />
<input type="radio" name="ans5" value="0"/>a href="xxx@yyy"<br /><br />



<li>What is the correct HTML tag for inserting a line break?</li><br />
<input type="radio" name="ans6" value="0"/>lb<br />
<input type="radio" name="ans6" value="0"/>cr<br />
<input type="radio" name="ans6" value="5"/>br<br />
<input type="radio" name="ans6" value="0"/>kr<br /><br />

<li>Choose the correct HTML tag to make a text italic</li><br />
<input type="radio" name="ans7" value="0"/>li<br />
<input type="radio" name="ans7" value="5"/>italics<br />
<input type="radio" name="ans7" value="0"/>italic<br />
<input type="radio" name="ans7" value="0"/>br<br /><br />

<li>What does vlink attribute mean?</li><br />
<input type="radio" name="ans8" value="5"/>visited link<br />
<input type="radio" name="ans8" value="0"/>very good link<br />
<input type="radio" name="ans8" value="0"/>good link<br />
<input type="radio" name="ans8" value="0"/>worst link<br /><br />

<li>Which attribute is used to name an element uniquely?</li><br />
<input type="radio" name="ans9" value="0"/>class<br />
<input type="radio" name="ans9" value="0"/>id<br />
<input type="radio" name="ans9" value="0"/>dot<br />
<input type="radio" name="ans9" value="5"/>all of above<br /><br />

<li>Which of the following is not a pair tag?</li><br />
<input type="radio" name="ans10" value="0"/>img<br />
<input type="radio" name="ans10" value="0"/>input<br />
<input type="radio" name="ans10" value="0"/>body<br />
<input type="radio" name="ans10" value="0"/>both a and b<br /><br />
</ol>
your quiz ends here please see your marks.
<p><input type="submit" value="Grade me" onclick="this.value='Please wait...'" /></p>
</form>
</div>
<div class="sidesection" id="right" style="margin-top: 125px;"><h2></h2>
<div class="col-xs-3 col-xs-offset-8">

<div class="fb-like" data-href="http://localhost/project%20m/index.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></div></div>
<!--modal begins here-->
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
<script>
  function call(){
    
    alert('Thank you for your Suggestion!!');
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/cbpBGSlideshow.min.js"></script>
    <script>
      $(function() {
        cbpBGSlideshow.init();
      });
    </script> 
</body>
</html>
