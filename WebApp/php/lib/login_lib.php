<?php

#
# Function library
# Code written for WILP Cloud computing Assignement #1
# 
# Author Prakash G M
# Assignment:Azure App Service - Web application deployment
#
#

# This script has two functions
# as_header
#	This function simnply calls the top section, 
# 	
# as_login_form
#	This function shows, the login form
#	It is shown, when the login variables are not set.
# 	
#	

function as_header($as_title='WILP Cloud Computing - Assignment 1 - 2020HT66517',$as_header='Azure App Service - Web deployment assignment',$as_header_style='color:white;margin-right:200px;margin-top:25px;',$as_background_image='img/WILP.jpg'){
	$as_str='
	<!DOCTYPE html>
	<html>';
		$as_str.='
		<head>';
			# This is for the fav icon - ADD in href any image path
			$as_str.='
			<link rel="SHORTCUT ICON" href="img/favicon.png" />';
			# Title
			$as_str.='
			<title>';
				$as_str.=$as_title;
			$as_str.='
			</title>';
			$as_str.='
			<meta name="viewport" content="width=device-width, initial-scale=1">';
			# Some CSS
			$as_str.='
			<style type="text/css">
				body {
					background:url('.$as_background_image.') no-repeat center center fixed;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
				}
				@media screen and (max-width: 992px) {
				  h2 {
					font-size: 22px;  
				  }
				}
				@media screen and (max-width: 768px) {
				  h2 {
					font-size: 16px;  
				  }
				}';
			$as_str.='
			</style>';
			# This script is required - do not touch
			$as_str.='
			<link href="css/bootstrap.min.css" rel="stylesheet">';
		$as_str.='
		</head>';
		$as_str.='
		<body>';
		$as_str.='
		<nav  class="navbar navbar-default" style="margin-left: 10em;margin-right: 10em;background-color: black;opacity:0.8;  border-bottom:2px solid grey;">';
			$as_str.='
			<a class="navbar-brand" href="#" target="_blank" style="margin-left: 1em;margin-top:-10px;">';
				$as_str.='
				<img src="img/wilp_logo.png" style="" width="150" height="60">';
			$as_str.='
			</a>';
			# Header 
			$as_str.='
			<h2 align="center" style="'.$as_header_style.'"><font style="font-family:helvetica;"><b>'.$as_header.'</b></font></b>';
			$as_str.='
			</h2>';
			# For right icons - currently not added any!
			$as_str.='
			<div align="right" style=" margin-top:-27px; margin-bottom:15px; margin-right:10px;"><br/>';
			$as_str.='
			</div>';
		$as_str.='
		</nav>';
		return $as_str;
}

function as_logIn_form(){
	# Starting the form
	$as_str='
	<form id="as_form" role="form" method="post" action="">';
		$as_str.='
		<fieldset>';
			$as_str.='
			<div class="form-group">';
				# Username
				$as_str.='
				
				<input class="form-control" placeholder="Enter username" name="username" value="" style="border-radius: 7px;border:1px solid #3B9EBF;" type="text" autofocus="" required>';
			$as_str.='
			</div>';
			$as_str.='
			<div class="form-group">';
				# Password
				$as_str.='
				<input class="form-control" placeholder="Enter password" name="password" value="" style="border-radius: 7px;border:1px solid #3B9EBF;" type="password" required>';
			$as_str.='
			</div>';
			# Submit / Login button
			$as_str.='
			<input name="submit_button" type="submit" value=" Login "  class="btn btn-sm btn-success" style="border-radius: 7px;float:right;width:25%">';
		$as_str.='
		</fieldset>';
	$as_str.='
	</form>';
	return $as_str;
}

function as_footer($as_top='250px'){
	$as_str='
	<div style="margin-left: 10em;margin-right: 10em;margin-top:'.$as_top.'; background-color: black;box-sizing: border-box;; height:55px; opacity:0.8;">
		<div class="col-xs-4 col-sm-4 col-md-4" style="margin-top:10px;">
			<img src="img/favicon.png" width=40px height=40px>
		</div>
		<div class="col-xs-8 col-sm-8 col-md-8" style="margin-top:10px;">
			<font style="color:white;text-align: center;">
	Prakash G M | 2020ht6617 | Cloud computing (CSI ZG527) | Computer Science and Infrastructure <br>
	<a href=https://bits-pilani-wilp.ac.in/>BITS PILANI WILP</a> | 
	<a href=https://elearn.bits-pilani.ac.in/user/courses/>eLearning Poral</a> | 
	<a href=http://a.impartus.com/ilc/#/home>Impartus</a> | 
	<a href=https://drive.google.com/file/d/19qUwtWpcKNLj6vI_2jeD2ng110Ik9j46/view>Video Link</a><br>
			</font>
		</div>
	</div>';
	return $as_str;
}
?>
