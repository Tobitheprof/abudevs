<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Registration</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								<li class="active">Memebers Registration</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">

						<!--.row-->
					<div class="row topmargin_40">
						<div class="col-md-11">
							<h3>Do You Want To Be  Member?:</h3>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs color2" role="tablist">
								<li class="active"><a href="#tab4" role="tab" data-toggle="tab"><i class="rt-icon2-heart-outline"></i> As Student</a></li>
								<li><a href="#tab5" role="tab" data-toggle="tab"><i class="fa fa-paw"></i>As Guest</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content top-color-border color2">
								<div class="tab-pane fade in active" id="tab4">
									<?php echo form_open('membership', 'class="shop-register" role="form"'); ?>
											<div class="col-sm-12">
												<div class="form-group validate-required" id="billing_first_name_field"> <label for="billing_first_name" class="control-label">
											<span class="grey">REG NO / MATRIC ID <i class="fa fa-user"></i>:</span>
											<span class="required">*</span>
										</label> <input type="text" autofocus="autofocus" required="required" placeholder="U15AL0001 /  PG1000" class="form-control "  name="reg_no" id="reg_no"> </div>
												
											</div>
										

												<div class="col-sm-12"> <button style="color: #fff;" type="submit" class="theme_button color1 topmargin_30">Contiune Registration</button> </div>
										</form>
										 <p> Already a Member <a href="<?php echo base_url(); ?>login" class="theme_button">Sign In <i class="fa fa-lock"></i></a> </p>
								</div>
								<div class="tab-pane fade" id="tab5">
									
									<?php echo form_open('guest', 'class="shop-register" role="form"'); ?>
											<div class="col-sm-12">
												<div class="form-group validate-required" id="billing_first_name_field"> <label for="billing_first_name" class="control-label">
											<span class="grey">Email Address <i class="fa fa-envelope"></i>:</span>
											<span class="required">*</span>
										</label> <input type="email" required="required" placeholder="Email Address" class="form-control "  name="reg_no" id="reg_no"> </div>
												
											</div>
										

												<div class="col-sm-12"> <button style="color: #fff;" type="submit" class="theme_button color1 topmargin_30">Contiune Registration</button> </div>
										</form>
										 <p> Already a Member <a href="<?php echo base_url(); ?>login" class="theme_button">Sign In <i class="fa fa-lock"></i></a> </p>
								</div>
							
							</div>
						</div>
					</div>
					<!--.row-->
					<div class="row">


					
					</div>
				</div>
			</section>