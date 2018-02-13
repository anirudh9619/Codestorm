<?php
// include database configuration file
include 'dbConfig.php';
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location:../fbtest.html");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
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
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body background="d3.jpg">

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
                    <a href="../ad/index-Ad.php">Sell/buy/Post</a>
                </li>
                <li><a href = "../quora.php" >Quora</a>
            </li>
            <li><a href="../quiz.php">Quiz</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

      <li><a href="" data-toggle="modal" data-target="#sugmodal"><span class="glyphicon glyphicon-edit" ></span> Suggestions</a></li>
        <li><a href="../contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
        <li><a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
      <li><img src="user.png"  class="img-circle" alt="" width="50" height="50" /></li>
       
      <li style="color:red;"><?php echo $_SESSION['login'];?></li>
      <li>
      <a href="../logout.php">Log Out
    </a></li>
      </ul>
        <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
        </div>
    </div>
</div>
</nav>
<div class="container" style="margin-top: 40px; background-color: white;">
    
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="thumbnail">
				   
				    <div class="thumbnail"><img src="<?php echo $row["image"]; ?>"></div>
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '&#x20B9;'.$row["price"].' INR'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>