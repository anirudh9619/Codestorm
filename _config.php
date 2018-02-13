<?php

/*
$host = "182.50.133.84";
$user = "anabpr";
$pass = "Guide@123";
$db   = "codes";
*/
function connect() {
	
	return mysqli_connect("localhost", "root", "", "codes");

}

?>