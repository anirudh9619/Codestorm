<html lang="en">
<head>
  <title>Codestorm</title>
  <meta charset="utf-8">
  <meta
  name="viewport" content="width=device-width, initial-scale=1">
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
	.ex {margin-left:1%;
		margin-top:1%;
		margin-right:1%;
		font-size:15px;
	}
	</style>
</head>
<body>
<div class="ex">
	<div class="alert alert-success">
		<div class="container">
			<?php
			$filename = $_GET['filename'];
			$fh = fopen($filename,'r');
			while ($line = fgets($fh)) 
			{
				echo nl2br(htmlspecialchars($line));
			}
			fclose($fh);
			?>
		</div>
	</div>
</div>
</body>
</html>