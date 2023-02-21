<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Registration</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								<li class="active">Students Registration</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<?php echo form_open('page/register', 'class="shop-register"'); ?>
							<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for= class="control-label">
							<span class="grey">Surname:</span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('first_name'); ?></span> 

						</label> <input type="text" class="form-control " autofocus="autofocus" name="first_name" id="first_name"> </div>
								
							</div>
							<div class="col-sm-6">
								<div class="form-group" id=""> <label for="" class="control-label">
							<span class="grey">Others Name:</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('last_name'); ?></span> 
						</label> <input type="text" class="form-control" name="last_name" > </div>
							</div>
							<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Matric ID</span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('reg_no'); ?></span> 
						</label> <input type="text" class="form-control " name="reg_no" > </div>
							
						
								
							</div>

								<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Tech Oriented</span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('tech'); ?></span> 
						</label> 
							<select name="tech" id="role">
							<option></option>
							
							<option value="Expert">Expert</option>
							<option value="Beginner">Beginner</option>
							<option value="Professional">Professional</option>
						</select>
						 </div>
							
						
								
							</div>

						<div class="col-sm-6">
						<div class="form-group validate-required validate-email" id="billing_email"> <label for="billing_email" class="control-label">
							<span class="grey">Gender</span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('gender'); ?></span> 
						</label> 
							<select name="gender" id="gender">
							<option></option>
							
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
							</div>
							</div>

							
							<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Phone Number <i class="fa fa-phone"></i></span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('phone'); ?></span> 
						</label> <input type="phone" class="form-control " name="phone" id="phone" > </div>
							
						
								
							</div>


							<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Email Address <i class="fa fa-envelope"></i></span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('email'); ?></span> 
						</label> <input type="email" required="required" class="form-control " name="email" > </div>								
							</div>


					<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Department <i class="fa fa-home"></i></span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('department'); ?></span> 
						</label> 
						<select name="department"  id="level">
							<option></option>
							<?php foreach ($departments as $department): ?>
                            <option value="<?php echo $department['department_id']; ?>"><?php echo $department['department']; ?></option>
                             <?php endforeach; ?>
						</select> 
					</div>			
							</div>


							

								<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Github Account <i class="fa fa-github"></i>    [optional]</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('git_url'); ?></span> 
						</label> <input type="text" class="form-control " name="git_url" id=""> </div>
							</div>


								<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">How do you hear about us</span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('about'); ?></span> 
						</label> 
							<select name="about" id="role">
							<option></option>
							<option value="Membership">Membership</option>
							<option value="Friends">Friends</option>
							<option value="Tech Events">Tech Events</option>
							<option value="Partners">Partners</option>
							<option value="Advertistment">Advertistment</option>
							<option value="Social Media">Social Media</option>
						</select>
						 </div>
							</div>


								<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Password <i class="fa fa-key"></i></span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('password'); ?></span> 
						</label> <input type="password" class="form-control"  name="password" id="password"> </div>
							</div>


							<div class="col-sm-6">
								<div class="form-group validate-required" id=""> <label for="" class="control-label">
							<span class="grey">Confirm Password <i class="fa fa-key"></i></span>
							<span class="required">*</span>
							 <span style="font-size: 9px;" class="text-danger"><?php echo form_error('conpassword'); ?></span> 
						</label> <input type="password" class="form-control"  name="conpassword" id="password"> </div>
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


								<div class="col-sm-12"> <button type="submit" class="theme_button color1 topmargin_30">Register</button></div>
						</form>
					</div>
				</div>
			</section>