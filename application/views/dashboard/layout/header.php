<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ICSITech2017 | <?php echo $_SESSION['username']; ?></title>
		<link rel="icon" href="<?php echo base_url("assets/img/favicon.png"); ?>">
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/AdminLTE.min.css">
		<!-- Custom -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/skins/_all-skins.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert.css">
		<script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>		
		<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.css"> -->
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		   folder instead of downloading all of them to reduce the load. -->
		<!-- <link rel="stylesheet" href=""> -->
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
		<a href="<?php echo site_url('Dashboard/'); ?>" class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini"><b>IT17</b></span>
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
			  <!-- User Account: style can be found in dropdown.less -->
			  <li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url("assets/img/favicon.png"); ?>" class="user-image" alt="User Image">
					<span class="hidden-xs">
						<?php echo $_SESSION['fullname']; ?>
					</span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?php echo base_url("assets/img/favicon.png"); ?>" class="img-circle" alt="User Image">
						<p>
							<?php echo $_SESSION['fullname'];?>
							<small>
								ICSITech2017 - <?php echo $_SESSION['username']; ?>
							</small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo site_url('Dashboard/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo site_url('Dashboard/loggingOut') ?>" class="btn btn-default btn-flat">Logout</a>
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
          <p><?php echo $this->session->fullname; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(2) == '') echo "active"; ?> treeview">
          <a href="<?php echo site_url('Dashboard/'); ?>">
            <i class="fa fa-home"></i> <span>Home</span>

          </a>
        </li>
        <?php if($_SESSION['fullname'] != "Treasurer"){ ?>
        <li class="<?php if($this->uri->segment(2) == 'reviewer') echo "active"; ?> treeview">
          <a href="<?php echo site_url('Dashboard/reviewer'); ?>">
            <i class="glyphicon glyphicon-user"></i> 
            <span>Reviewer</span>
				<span class="pull-right-container">
					<small class="label pull-right bg-light-blue"><?php echo $tRev; ?></small>            
				</span>            
          </a>
        </li>         
        <?php } ?>
        <li class="<?php if($this->uri->segment(2) == 'participant') echo "active"; ?> treeview">
          <a href="<?php echo site_url('Dashboard/participant'); ?>">
            <i class="fa fa-user-md"></i> 
            <span>Participant Data</span>
				<span class="pull-right-container">
					<small class="label pull-right bg-light-blue"><?php echo $tPar; ?></small>            
				</span>            
          </a>
        </li>
        <?php if($_SESSION['fullname'] != 'Secretary'){ ?>
        <li class="<?php if($this->uri->segment(2) == 'payment') echo "active"; ?> treeview">
          <a href="<?php echo site_url('Dashboard/payment'); ?>">
            <i class="fa fa-dollar"></i> 
            <span>Payment</span>
       		<span class="pull-right-container">
					<!-- <small class="label pull-right bg-blue">14</small>             -->
					<small class="label pull-right bg-light-blue"><?php echo $tPay; ?></small>            
				</span> 
          </a>
        </li> 
        <?php } ?>     
        <li class="<?php if($this->uri->segment(2) == 'news') echo "active"; ?> treeview">
          <a href="<?php echo site_url('Dashboard/news'); ?>">
            <i class="fa fa-newspaper-o"></i> 
            <span>News</span>
       		<span class="pull-right-container">
					<!-- <small class="label pull-right bg-blue">14</small>             -->
					<small class="label pull-right bg-light-blue"><?php echo $tNews; ?></small>            
				</span> 
          </a>
        </li> 
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i><span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i><span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i><span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>