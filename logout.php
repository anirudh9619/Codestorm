<?php
require 'php-graph-sdk-5.0.0/src/Facebook/autoload.php';
 
$facebook = new Facebook\Facebook([
  'app_id' => '681900011984018', // Replace {app-id} with your app id
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v2.2',
  ]);   //including the facebook php sdk

$url = 'fbtest.html';
$logoutUrl = $facebook->getLogoutUrl();
header('Location: '.$url);
?>