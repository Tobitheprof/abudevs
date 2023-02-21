<section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>LAB</h2>
							<ol class="breadcrumb greylinks">
								<li> <a href="#">
							Home
						</a> </li>
								<li class="active">Add New LAB</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<h4 class="text-center">Add New LAB</h4>
						<div class="col-sm-12">
							 <?php if (isset($_SESSION['success_post'])) {?>


              <div class="alert alert-success"><?php echo $_SESSION['success_post']; ?></div>
              <?php
              } ?>
                                      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

                  <?php echo  form_open_multipart('page/add_lab'); ?>
                <div class="">  
                     <div class="modal-header">  
                          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                          <h4 class="modal-title">Add LAB</h4>  
                          <p>Hi, You are seeing this Page because you are LAB Admin of the LAB</p>
                     </div>  

                     <div class="modal-body">  
                      <h5>LAB  Details</h5>
                   

                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Title*</label> 
                           <span style="font-size: 9px;" class="text-danger"><?php echo form_error('class'); ?></span> 
                          <input type="text" required="required" placeholder="Title Goes Here" name="post_title" class="form-control" />  
                        </div>
                      </div>


                             <div class="col-lg-12">
                        <div class="form-group">
                          <label>Link <small style="color: red;">*</small></label>  
                          <input type="text" name="link" id="link" placeholder="Youtube Link" class="form-control" />  
                        </div>
                      </div>

                       


                        <div class="col-lg-12">
                        <div class="form-group">
                          <label>Body Content</label>  
                          <textarea class="form-control" id="editor1" rows="5" cols="2" name="body"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Featured Image</label>
                        <input type="file" name="userfile">
                      </div>

                         
                     </div>  
                     <div class="modal-footer">  
                         <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-home"></i> Publish</button>
                     </div>  
                </div>  
           </form> 

						
							</div>
						</div>
					</div>
				</div>
			</section>