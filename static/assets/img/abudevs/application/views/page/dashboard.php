	<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Dashboard</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_100">
				<div class="container">
					<div class="row">
						
					<div class="row topmargin_40">
						<div class="col-md-12">
							
							<div>
								
							</div>

							<h5>Welcome Back, <?php echo $user_info['fname']; ?></h5>

							<?php if ($user_info['about']=='admin' && $_SESSION['username']!=null) {?>
								<a href="<?php echo base_url(); ?>page/add_news">ADD NEW BLOG</a> 
								                          <p>Hi, You are seeing this Page because you are Blog Admin</p>

						<?php	} ?>
							<div class="row vertical-tabs color3">
								<div class="col-sm-4">
									<!-- Nav tabs -->
									<ul class="nav" role="tablist">
										<li class="active"> <a href="#vertical-tab1" role="tab" data-toggle="tab">
									<i class="rt-icon2-home2"></i> Dashboard
								</a> </li>
										<li> <a href="#vertical-tab2" role="tab" data-toggle="tab">
									<i class="rt-icon2-light-bulb"></i> Event
								</a> </li>
										<li> <a href="#vertical-tab3" role="tab" data-toggle="tab">
									<i class="rt-icon2-book"></i> My Courses
								</a> </li>
										<li> <a href="#vertical-tab4" role="tab" data-toggle="tab">
									<i class="rt-icon2-cog"></i> Profile
								</a> </li>
									</ul>
								</div>
								<div class="col-sm-8">
									<!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane fade in active" id="vertical-tab1">
											<p><i class="rt-icon2-anchor"></i> My Dashboard
												<p> <div class="col-md-3">
													<i class="fa fa-user"></i>
												Recent Courses</div> </p>
											<p>Email Address: <?php echo $user_info['email']; ?></p>
											<p>Mobile Number: <?php echo $user_info['phone']; ?></p>
											
											</p>
										</div>
										<div class="tab-pane fade" id="vertical-tab2">
											<p><i class="rt-icon2-compass"></i> <a href="<?php echo base_url(); ?>blog">My Events </a></p>
										</div>
										<div class="tab-pane fade" id="vertical-tab3">
											<p><i class="rt-icon2-book"></i>  <div class="col-md-3">
											<a href="<?php echo base_url(); ?>lab">My Lab </a>
										</div> </p>
										</div>
										<div class="tab-pane fade" id="vertical-tab4">
											<p><i class="fa fa-trophy"></i> My profile</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--.row-->
					
				</div>
			</section>