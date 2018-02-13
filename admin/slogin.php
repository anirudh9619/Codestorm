<html>
 <head> 
<title>Sign-In</title> <link rel="stylesheet" type="text/css" href="style-sign.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=5)"> 
<style>

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.inpt {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.button1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button1:hover,.form button:active,.form button:focus {
  background: #43A047;
}


</style>
</head>
 <body id="body-color" background="d3.jpg">
<button class="btn btn-success"><a href="../fbtest.html">Click to go to home</a></button>
 <div class="login-page">
  <div class="form">
    <form class="login-form"  method="POST" action="connect.php">
      <input type="text" class="inpt" placeholder="username" name="user" size="30"/>
      <input type="password" class="inpt" placeholder="password " name="pass" size="30"/>
      <input class="button1" id="button" type="submit" name="submit" value="Log-In">
	</form>
  </div>
</div>
</body>
 </html>