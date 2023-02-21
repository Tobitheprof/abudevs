 <section id="about" class="ls section_padding_top_110 columns_padding_30">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-push-6 to_animate hidden-xs" data-animation="fadeInUp" data-delay="600">
              <div class="embed-responsive embed-responsive-3by2"> <a href="#" >
            <img src="<?php echo base_url(); ?>assets/images/gallery/01.jpg" alt="">
          </a> </div>
            </div>
            <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInRight" data-delay="300">
              <h5 class="section_header color4"> Login Panel  </h5>
              <p class="section-excerpt grey">


                <form class="checkout with_border with_padding form-horizontal" method="POST" role="form" action="<?php echo base_url('login'); ?>">
                  <p>Kindly Login to access your Account</p>

                   <?php if (isset($_SESSION['login_failed'])) {?>


                            <div style="color: red;font-size: 13px;"><?php echo $_SESSION['login_failed']; ?></div>
                            <?php
                            } ?>
                  <div class="form-group">

                   <label for="username" class="col-sm-3 control-label">
                <span class="grey">Username </span> 
                <span class="required">*</span>
                   
              </label>

                    <div class="col-sm-9"> 
                      <span style="font-size: 9px;" class="text-danger"><?php echo form_error('username'); ?></span>
                      <input type="text" class="form-control" name="username" id="username" placeholder="U14csXXXX"> </div>
                  </div>
                  <div class="form-group"> <label for="password" class="col-sm-3 control-label">
                <span class="grey">Password:</span> 
                <span class="required">*</span>
                   
              </label>
                    <div class="col-sm-9"> 
                      <span style="font-size: 9px;" class="text-danger"><?php echo form_error('password'); ?></span>
                      <input class="form-control" type="password" name="password" id="password"> </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <div class="checkbox"> <label for="rememberme" class="control-label">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
                    Remember me       
                  </label> </div> <input type="submit" class="theme_button color1 topmargin_20" name="login" value="Login">
                      <div class="lost_password"> <a href="#">Lost your password?</a> </div>
                    </div>
                  </div>
                </form>
              </p>
            </div>
          </div>
        </div>
      </section>