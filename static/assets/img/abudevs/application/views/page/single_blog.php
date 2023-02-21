<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Blog</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>blog">
							Blog
						</a> </li>
								<li class="active"><?php echo $blog['title']; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">

					
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="services-main">
								<h2><?php echo $blog['title']; ?></h2>
								<!-- Service Slider -->
								<img style="height: 300px;" src="<?php echo base_url(); ?>assets/post_image/<?php echo $blog['post_image']; ?>" alt="#">
								<!-- End Service Slider -->
								<!-- Service Content -->
								<div class="services-content">
									

									<p>
										<a target="_blank" href="<?php echo $blog['link']; ?>" class="theme_button color2 margin_0">Get the link</a>
										<br>
										<?php echo $blog['body']; ?>
									</p>
									
								</div>
								<!--/ End Service Content -->
							</div>
						</div>




						
					</div>
				</div>
			</section>