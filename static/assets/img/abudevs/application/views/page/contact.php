
<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Contact Us</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="<?php echo base_url(); ?>">
							Home
						</a> </li>
								<li class="active">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
							 <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-6 col-xs-12">
              <?php if (isset($_SESSION['success_contact_save'])) {?>


              <div class="alert alert-success"><?php echo $_SESSION['success_contact_save']; ?></div>
              <?php
              } ?>
                    <?php echo form_open('contact', 'class="form"'); ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Full Name" >
               <span style="font-size: 9px;color: red;"><?php echo form_error('name'); ?></span>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Your Email" >
                     <span style="font-size: 9px;color: red;"><?php echo form_error('email'); ?></span>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <input type="phone" name="phone" class="form-control" placeholder="Your Phone" >
                    </div>
                  <span style="font-size: 9px;color: red;"><?php echo form_error('phone'); ?></span>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="Subject" >
                  <span style="font-size: 9px;color: red;"><?php echo form_error('subject'); ?></span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" rows="7" placeholder="Type Your Message Here" ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group button"> 
                      <button type="submit" class="theme_button color1 topmargin_20">Submit Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--/ End Contact Form -->
            <!-- Contact Address -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="contact-address">
                <div class="contact">
                  <h2>Get In Touch</h2>
                  <p>Our support is available 24/7 hours services</p>
                  <!-- Single Address -->
                  <div class="single-address">
                    <span><i class="fa fa-headphones"></i>Phone</span>
                    <p>+23400000000, +23400000000,</p>
                  </div>
                  <!--/ End Single Address -->
                  <!-- Single Address -->
                  <div class="single-address">
                    <span><i class="fa fa-envelope"></i>Email</span>
                    <p><a href="mailto:abudevs2019@gmail.com">abudevs@gmail2019.com</a></p>
                  </div>



                  <div class="single-address">
                  
                    <p><a href="mailto:abudevs@gmail2019.com">  <span><i class="fa fa-slack"></i>  Slack </span></a> &nbsp;
                    	<a href="mailto:abudevs@gmail2019.com">  <span><i class="fa fa-github"></i> Github </span></a></p>
                  </div>


                   



                  <!--/ End Single Address -->
                  <!--/ End Single Address -->
                  <!-- Single Address -->
                  <div class="single-address">
                    <span><i class="fa fa-map"></i>Location:</span>
                    <p>Ahmadu Bello university,Kaduna State.</p>
                  </div>
					</div>
				</div>
			</section>