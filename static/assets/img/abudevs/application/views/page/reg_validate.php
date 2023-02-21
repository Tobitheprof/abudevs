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
					<div class="row">
						<?php echo form_open('update-account', 'class="shop-register" role="form"'); ?>
							<input type="hidden" name="name" value="<?php echo $student_info['name'] ?>">
							<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button> Welcome Back,<b style="text-transform: uppercase;"><?php echo $student_info['name'] ?></b> kindly proceed to update your Membership Account Profile</div>

							<div class="col-sm-6">
								<div class="form-group validate-required" > <label  class="control-label">
							<span class="grey">Matric ID</span>
							<span class="required">*</span>

						</label> <input type="text" readonly="readonly" value="<?php echo $student_info['regno'] ?>"  class="form-control "> 
						</div>
							</div>


							<div class="col-sm-6">
								<div class="form-group validate-required" > <label  class="control-label">
							<span class="grey">Email Address <i class="fa fa-envelope"></i></span>
							<span class="required">*</span>
							<span style="font-size: 9px;" class="text-danger"><?php echo form_error('email'); ?></span> 
						</label> 
						<input type="hidden" name="reg_no" value="<?php echo $student_info['regno']; ?>">
					<input type="email" value="<?php echo $student_info['email'] ?>"  required="required" class="form-control " name="email" placeholder="">
						 </div>
							</div>

						<div class="col-sm-6">
								<div class="form-group validate-required" > <label  class="control-label">
							<span class="grey">Phone Number <i class="fa fa-phone"></i></span>
							<span class="required">*</span>
							<span style="font-size: 9px;" class="text-danger"><?php echo form_error('phone'); ?></span> 
						</label> <input type="phone" required="required" class="form-control" value="<?php echo $student_info['phone'] ?>"  name="phone" id="phone" placeholder=""> </div>
							
						
								
							</div>

								<div class="col-sm-6">
								<div class="form-group validate-required" > <label  class="control-label">
							<span class="grey">Password <i class="fa fa-key"></i></span>
							<span class="required">*</span>
							<span style="font-size: 9px;" class="text-danger"><?php echo form_error('password'); ?></span> 
						</label> <input type="password" required="required" minlength="5" class="form-control"  name="password" id="password" placeholder=""> </div>
							</div>


							<div class="col-sm-12">
								<div class="form-group">
									<div class="col-sm-9">
										
										<div class="checkbox"> <label>
									<input required="required" type="checkbox"> I have agree with Membership<a href="#">Terms and Conditions</a>
								</label> </div>
									</div>
								</div>
							</div>

								<div class="col-sm-12"> <button type="submit" class="theme_button color1 topmargin_30">Register</button> </div>
						</form>
					</div>
				</div>
			</section>