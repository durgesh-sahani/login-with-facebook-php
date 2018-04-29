<?php 
	require 'config.php';

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email', 'publish_actions']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://tutorials.lcl/facebook/callback.php', $permissions);

	header("location:" . $loginUrl);
 ?>