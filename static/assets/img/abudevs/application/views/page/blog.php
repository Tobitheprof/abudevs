<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Blog</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="#">
							Home
						</a> </li>
								<li class="active">Lastest Blog</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<h4 class="text-center">Latest Blog</h4>
						<div class="col-sm-12">


							<div class="0">
							<?php foreach ($blogs as $blog): ?>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<article class="post vertical-item content-padding with_border bottom_color_border loop-color">
										<div class="item-media entry-thumbnail"> <a href="<?php echo base_url(); ?>post/<?php echo $blog['slug']; ?>"><img src="<?php echo base_url(); ?>/assets/post_image/<?php echo $blog['post_image']; ?>" alt=""> </a></div>
										<div class="item-content">
											<header class="entry-header">
												<h4 class="entry-title small"> <a href="<?php echo base_url(); ?>post/<?php echo $blog['slug']; ?>" rel="bookmark"><?php echo $blog['title']; ?></a></h4>
												<div class="entry-meta inline-content greylinks"> <span>
									<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
									<a href="<?php echo base_url(); ?>post/<?php echo $blog['slug']; ?>">
										
									</a>
								</span> <span>
									<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
									<a href="javascript('0')"><i class="fa fa-code"></i> Developer</a>
								</span> <span class="categories-links">
									<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
									<a href="javascript('0')">Community</a>
								</span> </div>
											</header>
										</div>
									</article>
								</div>
							</div>
							<?php endforeach; ?>
							<!-- eof .isotope_container.row -->
						<!-- 	<div class="row topmargin_30">
								<div class="col-sm-12 text-center">
									<ul class="pagination">
										<li><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</section>