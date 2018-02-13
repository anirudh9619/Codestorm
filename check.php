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
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=681900011984018";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sugmodal">imex</button></div>
<div><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imexmodal">Post Your ad</button></div>
<div class="modal fade modal-md" id="imexmodal" role="dialog">
    <div class="modal-dialog">
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
                            <option value="3">Games</option>
                            <option value="4">Electronics</option>
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
                <input type="text" name="cost" class="form-control" id="price" placeholder="Enter the price here" required="required">
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
    <input type="text" name="con"class="form-control" id="conta" placeholder="Contact Number" required="required">
</div>
<!--fb profile link-->
<div class="form-group" align="left">
    <label for="fb"><!--<span class="glyphicon glyphicon-comment"></span>-->
    &nbsp;Fb profile link
</label>
<input type="text" name="" class="form-control" id="" placeholder="https://www.facebook.com/anuraj.singh.10" required="required">
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
<div class="fb-comments" data-href="http://localhost/project%20m/quora.php" data-width="580" data-numposts="3"></div>
</div>


<div class="col-md-6">
<div class="fb-page" id="fp" data-href="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel" data-tabs="timeline" data-width="260" data-height="140" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Codestorm-107099063094763/?ref=aymt_homepage_panel">Codestorm</a></blockquote></div>
</div>
</body>
</html>