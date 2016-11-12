<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/accordion.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	<title>2017 3rd International Conference on Science in Information Technology (ICSITech)</title>
	
	<!-- SCRIPT BELOW HERE -->
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>	
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>	
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.0.min.js'); ?>"></script>	
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>	
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/accordion.min.js'); ?>"> </script>
	<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/index.js'); ?>">
	</script>
		<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>">
	</script>
</head>
<body>
	<header id="header" class="">
		<div class="row" style="background-color:#e5e5e5; margin-top: -20px;">
			<div class="uppernav">
				<nav>
					<ul id="utilitymenu">
					<br>
		
						<li style="margin-right: 2px;"><a href="http://www.ieee.org/index.html?WT.mc_id=mn_ieee" title="" target="_blank">IEEE.org </a>|</li>
						<li style="margin-right: 2px;"><a href="http://ieeexplore.ieee.org/" title="" target="_blank"> IEEE <i style="font-style:italic;">Xplore</i> Digital Library </a>|</li>
						<li><a href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap" title="" target="_blank"> More IEEE Sites</a></li>
		
					</ul>
				</nav>
			</div>
		</div>
		<div class="row" style="background-color:#e5e5e5;">
			<div class="lowernav">
				<div class="col-md-2">
					<a href="http://icsitech.org/" title=""><img src="<?php echo base_url('assets/img/icsitech-head.png'); ?>" alt="icsihead" class="icsi-head"></a>
				</div>
				<div class="col-md-4 md-head-text">
					<p class="icsi-text-head">International Conference on Science in Information Technology</p>
					<p class="icsi-text-second-head">October 25-26, 2017 <i style="font-weight:normal;">//</i> Bandung, Indonesia</p>
				</div>

				<div class="col-md-3 col-md-offset-3">
				  	<div id="ieee-head">
						<a href="http://ieee.id" title="" target="_blank"><img src="<?php echo base_url('assets/img/ieeeit.png'); ?>" alt="icsihead" class="ieee-head"></a> 
				    </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default" id="bgblue" role="navigation">
			<div class="container-fluid">
			<!-- <center> -->
				<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="" style="background-color: #007eff; color: white;">
			       <span class="glyphicon glyphicon-menu-hamburger"></span>
			      </button>
			   </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav" style="">
			        <!-- <li class="pull-left"><a href="#">Dashboard</a></li> -->
			        <li class="divider"><a href="http://icsitech.org/">HOME</a></li>
			        <li class="delimiter"><a onclick="return false;">//</a></li>
			        <li class="divider"><a href="<?php echo site_url('Committee/keynote'); ?>">KEYNOTE SPEAKERS</a></li>
	  		        <li class="delimiter"><a>//</a></li>
			        <li class="divider"><a href="<?php echo site_url('Committee/'); ?>">COMMITTEES</a></li>
	  		        <li class="delimiter"><a>//</a></li>
			        <li class="divider"><a href="<?php echo site_url('Dates/'); ?>">DATES</a></li>
			        <li class="delimiter"><a>//</a></li>		        
			        <li class="divider"><a href="<?php echo site_url('Venue/'); ?>">VENUE</a></li>
			        <li class="delimiter"><a>//</a></li> 
			        <li class="divider"><a href="<?php echo site_url('Visa/'); ?>">VISA MATTERS</a></li>		        
			        <li class="delimiter"><a>//</a></li>
			        <li class="divider"><a href="<?php echo site_url('Contact/'); ?>">CONTACT</a></li>
			        <li class="delimiter"><a>//</a></li>
				<li class="divider"><a href="<?php echo site_url('Download/'); ?>">DOWNLOAD</a></li>		        
			      </ul>
			    </div><!-- /.navbar-collapse -->
			   <!-- </center> -->
 			</div>  
		</nav>
	</header>
	<!-- /header -->
<!-- Until Blue Navigation -->