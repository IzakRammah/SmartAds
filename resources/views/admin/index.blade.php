<!DOCTYPE html>
<html>

<!-- BEGIN HEAD -->
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
	<meta charset="utf-8"/>
	<title>Smartads - Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<!-- BEGIN PLUGIN CSS -->
	<link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<!-- END PLUGIN CSS -->

	<!-- BEGIN CORE CSS FRAMEWORK -->
	<link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
	<!-- END CORE CSS FRAMEWORK -->

	<!-- BEGIN CSS TEMPLATE -->
	<link href="admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<div class="header-seperation">
				<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
					<li class="dropdown">
						<a id="main-menu-toggle" href="#main-menu" class="">
							<div class="iconset top-menu-toggle-white"></div>
						</a>
					</li>
				</ul>
				<!-- BEGIN LOGO -->
				<a href="index.html">
					<img src="admin/assets/img/logo.png" class="logo" alt="" data-src="admin/assets/img/logo.png" data-src-retina="admin/assets/img/logo2x.png" width="106" height="21"/>
				</a>
				<!-- END LOGO -->
				<ul class="nav pull-right notifcation-center">
					<li class="dropdown" id="header_task_bar">
						<a href="index.html" class="dropdown-toggle active" data-toggle="">
							<div class="iconset top-home"></div>
						</a>
					</li>
					<li class="dropdown" id="header_inbox_bar">
						<a href="" class="dropdown-toggle">
							<div class="iconset top-messages"></div>
							<span class="badge" id="msgs-badge">2</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<div class="header-quick-nav">
				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="pull-left">
					<ul class="nav quick-section">
						<li class="quicklinks">
							<a href="#" class="" id="layout-condensed-toggle">
								<div class="iconset top-menu-toggle-dark"></div>
							</a>
						</li>
					</ul>
					<ul class="nav quick-section">
						<li class="quicklinks">
							<a href="#" class="">
								<div class="iconset top-reload"></div>
							</a>
						</li>
						<li class="m-r-10 input-prepend inside search-form no-boarder">
							<span class="add-on">
								<span class="iconset top-search"></span>
							</span>
							<input name="" type="text" class="no-boarder" placeholder="Search Dashboard" style="width:250px;">
						</li>
					</ul>
				</div>
				<!-- END TOP NAVIGATION MENU -->

				<!-- BEGIN CHAT TOGGLER -->
				<div class="pull-right">
					<div class="chat-toggler">
						<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
							<div class="user-details">
								<div class="username">
									<span class="badge badge-important">3</span>
									<span class="bold">Developer</span>
								</div>
							</div>
							<div class="iconset top-down-arrow"></div>
						</a>
						<div id="notification-list" style="display:none">
							<div style="width:300px">
								<div class="notification-messages info">
									<div class="user-profile">
										<img src="admin/assets/img/profiles/d.jpg" alt="" data-src="admin/assets/img/profiles/d.jpg" data-src-retina="admin/assets/img/profiles/d2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
											A min ago
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="notification-messages danger">
									<div class="iconholder">
										<i class="icon-warning-sign"></i>
									</div>
									<div class="message-wrapper">
										<div class="heading">
											Server load limited
										</div>
										<div class="description">
											Database server has reached its daily capicity
										</div>
										<div class="date pull-left">
											2 mins ago
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="notification-messages success">
									<div class="user-profile">
										<img src="admin/assets/img/profiles/h.jpg" alt="" data-src="admin/assets/img/profiles/h.jpg" data-src-retina="admin/assets/img/profiles/h2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											You haveve got 150 messages
										</div>
										<div class="description">
											150 newly unread messages in your inbox
										</div>
										<div class="date pull-left">
											An hour ago
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="profile-pic">
							<img src="admin/assets/img/profiles/martian_small.jpg" alt="" data-src="admin/assets/img/profiles/martian_small.jpg" data-src-retina="admin/assets/img/profiles/martian_small.jpg" width="35" height="35"/>
						</div>
					</div>
					<ul class="nav quick-section">
						<li class="quicklinks">
							<a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
								<div class="iconset top-settings-dark"></div>
							</a>
							<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
								<li><a href="">My Account</a></li>
								<li><a href="">My Calendar</a></li>
								<li><a href="">My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a></li>
								<li class="divider"></li>
								<li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- END CHAT TOGGLER -->
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar" id="main-menu">
			<!-- BEGIN MINI-PROFILE -->
			<div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
				<div class="user-info-wrapper">
					<div class="profile-wrapper">
						<img src="admin/assets/img/profiles/martian.jpg" alt="" data-src="admin/assets/img/profiles/martian.jpg" data-src-retina="admin/assets/img/profiles/martian.jpg" width="69" height="69"/>
					</div>
					<div class="user-info">
						<div class="greeting">Welcome</div>
						<div class="username">
							<span class="semi-bold">Developer</span>
						</div>
					</div>
				</div>
				<!-- END MINI-PROFILE -->

				<!-- BEGIN SIDEBAR MENU -->
				<br>
				<br>
				<ul>
					<li class="start active">
						<a href="apanel"> <i class="icon-custom-home"></i>
							<span class="title">Dashboard</span>
							<span class="selected"></span>
							<span class="badge badge-important pull-right">5</span>
						</a>
					</li>
					<li class="">
						<a href="profile"> <i class="fa fa-user"></i>
							<span class="title">Profile</span>
							<span class=" badge badge-disable pull-right">203</span>
						</a>
					</li>
					<li class="">
						<a href="../frontend/index.html"> <i class="fa fa-flag"></i>
							<span class="title">Frontend</span>
						</a>
					</li>
					<li class="">
						<a href="javascript:;"> <i class="fa fa-archive"></i>
							<span class="title">Storage</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li> <a href="javascript:;"><a href="">Coporate</a> </li>
							<li> <a href="javascript:;"><a href="">Simple</a> </li>
							<li> <a href="javascript:;"><a href="">Elegant</a> </li>
						</ul>
					</li>
					<li class="">
						<a href="javascript:;"> <i class="fa fa-desktop"></i>
							<span class="title">Zones</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li> <a href="">Layout Options</a> </li>
							<li> <a href="">Boxed Layout</a> </li>
							<li> <a href="">Inner Boxed Layout</a> </li>
							<li> <a href="">Extended Layout</a> </li>
							<li> <a href="">RTL Layout</a> </li>
							<li> <a href="">Horizontal Menu</a> </li>
							<li> <a href="">Horizontal Menu & Boxed</a> </li>
						</ul>
					</li>
					<li class="">
						<a href="javascript:;"> <i class="fa fa-history"></i>
							<span class="title">Activity Log</span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li> <a href="">Typography</a> </li>
							<li> <a href="">Messages & Notifications</a> </li>
							<li> <a href="">Icons</a> </li>
							<li> <a href="">Buttons</a> </li>
							<li> <a href="">Tabs & Accordions</a> </li>
							<li> <a href="">Sliders</a> </li>
							<li> <a href="">Group list</a> </li>
						</ul>
					</li>
					<li class="">
						<a href="lockscreen.html"> <i class="fa fa-power-off"></i>
							<span class="title">Log out</span>
						</a>
					</li>
					<div class="side-bar-widgets"></div>
					<div class="clearfix"></div>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
			<!-- END MINI-PROFILE -->
		</div>
		<a href="#" class="scrollup">Scroll</a>
		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE CONTAINER-->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">Widget settings form goes here</div>
			</div>
			<div class="clearfix"></div>
			<div class="content">
				<div class="page-title">
					<h3>Master Page</h3>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		</div>
		<!-- END PAGE CONTAINER-->
	</div>
	<!-- END CONTAINER -->

	<!-- BEGIN CORE JS FRAMEWORK-->
	<script src="admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="admin/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="admin/assets/plugins/breakpoints.js" type="text/javascript"></script>
	<script src="admin/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
	<script src="admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
	<!-- END CORE JS FRAMEWORK -->

	<!-- BEGIN PAGE LEVEL JS -->
	<script src="admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
	<script src="admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN CORE TEMPLATE JS -->
	<script src="admin/assets/js/core.js" type="text/javascript"></script>
	<!-- <script src="admin/assets/js/chat.js" type="text/javascript"></script> -->
	<!-- END CORE TEMPLATE JS -->
</body>
<!-- END BODY -->

</html>