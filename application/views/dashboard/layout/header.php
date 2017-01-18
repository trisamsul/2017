<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ICSITech2017 | Admin</title>
		<link rel="icon" href="<?php echo base_url("assets/img/logo/favicon.png"); ?>">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<!-- Custom -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/AdminLTE.min.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/skins/_all-skins.min.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	  <header class="main-header">
		<!-- Logo -->
		<a href="#" class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini"><b>17</b></span>
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg"><b>ICSITech</b> 2017</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
		  <!-- Sidebar toggle button-->
		  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>

		  <div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
			  <!-- Messages: style can be found in dropdown.less-->
			  <li class="dropdown messages-menu">
				
				<ul class="dropdown-menu">
				  <li class="header">You have 4 messages</li>
				  <li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu">
					  <li><!-- start message -->
						<a href="#">
						  <div class="pull-left">
							<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
						  </div>
						  <h4>
							Support Team
							<small><i class="fa fa-clock-o"></i> 5 mins</small>
						  </h4>
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					  <!-- end message -->
					  <li>
						<a href="#">
						  <div class="pull-left">
							<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
						  </div>
						  <h4>
							AdminLTE Design Team
							<small><i class="fa fa-clock-o"></i> 2 hours</small>
						  </h4>
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					  <li>
						<a href="#">
						  <div class="pull-left">
							<img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
						  </div>
						  <h4>
							Developers
							<small><i class="fa fa-clock-o"></i> Today</small>
						  </h4>
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					  <li>
						<a href="#">
						  <div class="pull-left">
							<img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
						  </div>
						  <h4>
							Sales Department
							<small><i class="fa fa-clock-o"></i> Yesterday</small>
						  </h4>
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					  <li>
						<a href="#">
						  <div class="pull-left">
							<img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
						  </div>
						  <h4>
							Reviewers
							<small><i class="fa fa-clock-o"></i> 2 days</small>
						  </h4>
						  <p>Why not buy a new awesome theme?</p>
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer"><a href="#">See All Messages</a></li>
				</ul>
			  </li>
			  
			  <!-- User Account: style can be found in dropdown.less -->
			  <li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url("assets/img/favicon.png"); ?>" class="user-image" alt="User Image">
					<span class="hidden-xs">
						Admin
					</span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?php echo base_url("assets/img/favicon.png"); ?>" class="img-circle" alt="User Image">
						<p>
							Super Admin
							<small>
								ICSITech2017 - Admin
							</small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
						</div>
						<div class="pull-right">
							<a href="#" class="btn btn-default btn-flat">Logout</a>
						</div>
					</li>
				</ul>
			  </li>
			</ul>
		  </div>
		</nav>
	  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("assets/img/favicon.png"); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>