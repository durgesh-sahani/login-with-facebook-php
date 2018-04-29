<?php 
	session_start();
	require 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([
	  'app_id' => '{app-id}', // Replace {app-id} with your app id
	  'app_secret' => '{app_secret}', // Replace {app_secret} with your app secret
	  'default_graph_version' => 'v2.11',
	]);

?>