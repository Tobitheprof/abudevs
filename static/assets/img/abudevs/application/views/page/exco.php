	<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Team</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								<li class="active">Executive</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<h4 class="text-center">The Executive</h4>
					<div class="row flex-wrap columns_margin_bottom_20">
						 <?php $i= 1; foreach ($materials as $material): ?>
						<div class="col-lg-3 col-md-3">
							<article class="vertical-item content-padding big-padding with_border bottom_color_border loop-color text-center">
								<div class="item-media"> <img style="height:300px;width: 100%; " src="<?php echo base_url(); ?>assets/exco/<?php echo $material['image']; ?>" alt=""> </div>
								<div class="item-content">
									<header class="entry-header">
										<h3 style="font-size: 15px;"> <a href="#"><?php echo $material['name']; ?></a> </h3> <span class="small-text highlight"><?php echo $material['post']; ?></span> </header>
								
								</div>
								
							</article>
						</div>
					 <?php $i++; endforeach; ?>
					
					</div>
				</div>
			</section>