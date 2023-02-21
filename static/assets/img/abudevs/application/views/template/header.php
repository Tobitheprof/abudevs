<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
	<title><?= $title;?>::Ahmadu Bello University Developers</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="Developers Website, Programming,Community">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animations.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/shop.css" class="color-switcher-link">
	<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

</head>

<body>

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="#">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas" class="spacing">
		<div id="box_wrapper">
			<!-- template sections -->
			<section class="page_topline ds table_section table_section_lg section_padding_top_15 section_padding_bottom_15 columns_margin_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 text-center text-lg-left xs-block">
							<div class="inline-content big-spacing">
								<div class="page_social"> 
									 <a class="fa fa-instagram" style="padding: 5px;font-size: 16px;" href="#" title="instagram"></a>
								  <a class="fa fa-github" style="padding: 5px;font-size: 16px;" href="#" title="github"></a>
								  <a class="fa fa-slack" style="padding: 5px;font-size: 16px;" href="#" title="Slack"></a> 
								 <a class="fa fa-facebook" style="padding: 5px;font-size: 16px;"  href="#" title="facebook"></a>	
								 <a class="fa fa-youtube"  style="padding: 5px;font-size: 16px;" href="#" title="Youtube"></a> 
								</div> <span class="hidden-xs">
						<i class="fa fa-clock-o highlight3 rightpadding_5" aria-hidden="true"></i>
										24/7	Team Support
					</span> </div>
						</div>
						<div class="col-lg-6 text-center text-lg-right">
							<div id="topline-animation-wrap">
								<div id="topline-hide" class="inline-content big-spacing"> <span class="hidden-xs">
							<i class="fa fa-map-marker highlight3 rightpadding_5" aria-hidden="true"></i>
							Ahmadu Bello University Zaira,Kaduna
						</span> <span class="greylinks hidden-xs">
							<i class="fa fa-envelope highlight3 rightpadding_5" aria-hidden="true"></i>
							<a style="font-size: 11px;" href="mailto:abudevs2019@gmail.com">abudevs2019@gmail.com</a>
						</span>
									<div class="xs-block">
										<ul class="inline-list menu greylinks">
											<li> <a href="<?php echo base_url(); ?>register"> <i class="fa fa-user"></i> My Account
									</a> </li>				
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<header class="page_header header_white toggler_xs_right columns_margin_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell"> <a href="<?php echo base_url(); ?>" class="logo logo_with_text">
                        <img src="<?php echo base_url(); ?>assets/logo.jpg" alt="">
                        <span class="logo_text">
                            ABUDevs
                            <small class="highlight4">Developers Community </small>
                        </span>
                    </a> </div>
							<div class="header_mainmenu display_table_cell text-center">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active"> <a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-2x"></i>Home</a>
											
										</li>
										
										<!-- eof pages -->
										<li> <a href="#">About <i class="fa fa-angle-down"></i></a>
											<ul>
												<li><a href="<?php echo base_url(); ?>team">Ambassador</a></li>
												<li><a href="">Community</a></li>
												<li><a href="">Pioneers</a></li>
												<li><a href="">Our Partner</a></li>
											</ul>
											
										</li>
										
										<!-- eof features -->
										
										<!-- blog -->
										<li><a href="<?php echo base_url(); ?>exco">Executives</a></li>
										


										<li> <a href="<?php echo base_url(); ?>lab">LAB  <i class="fa fa-angle-down"></i></a>
											<ul>
												<li><a href="<?php echo base_url(); ?>lab#course">Courses</a></li>
												<li><a href="<?php echo base_url(); ?>lab#tools">Tools</a></li>
												<li><a href="">Showcase</a></li>
												<li><a href="">Project</a></li>
											</ul>
											
										</li>
										
										
										<li> <a href="#">Events</a></li>
										<li> <a href="<?php echo base_url(); ?>blog">Blog</a></li>

										<li> <a href="<?php echo base_url(); ?>contact">Contact</a></li>

										<!-- <li> <a href="#">My Account <i class="fa fa-angle-down"></i></a>
											<ul>
												<li> <a href="#">Login</a> </li>
												<li> <a href="#">Register</a> </li>
											</ul>
											
										</li> -->
										<!-- eof contacts -->
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler --><span class="toggle_menu"><span></span></span>
							</div>
							<div class="header_right_buttons display_table_cell text-right hidden-xs btn-sm"> <a href="#" class="theme_button color2 margin_0">Donate</a> </div>
						</div>
					</div>
				</div>
			</header>