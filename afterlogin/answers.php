<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location:../fbtest.html");

}

?>

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
<body background="quiz.jpg">


  
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
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li><a href="" data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit" ></span> Suggestions</a></li>
        <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
      <li><img src="user.png"  class="img-circle" alt="" width="50" height="50" /></li>
       
      <li style="color:red;"><?php echo $_SESSION['login'];?></li>
      <li>
      <a href="logout.php">Log Out
    </a></li>
      </ul>
    </div>
  </div>
</nav>
  

  <div class="btn-success" style="margin-top: 250px; margin-right: 550px; margin-left: 550px; border-radius: 10px; text-decoration-style: none; font-size: 30px;"><a href="" data-toggle="modal" data-target="#sugmodal">Click here to watch the answer</a></div>

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
<h4><span class="glyphicon glyphicon-paperclip"></span>&nbsp;Right answers are here!!</h4>
<a class="btn-success" href="quiz.php" style="float: right;">click here to go back on quiz</a>
</div>
<!--modal header ends-->
<!--modal body starts-->
<div class="modal-body" style="padding:40px 50px;">
 <h3>1 - 3</h3>
 <h3>2 - 1</h3>
 <h3>3 - 4</h3>
 <h3>5 - 1</h3>
 <h3>6 - 2</h3>
 <h3>7 - 2</h3>
 <h3>8 - 4</h3>
 <h3>9 - 1</h3>
 <h3>10 - 2</h3>
<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span>
Cancel
</button>

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
