	<script>
('#staff').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add staff</a></li>
			</ul>

			<?php
			if (isset($msg)) {
			?>
			<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>New Staff is added.</strong> 
						</div><?php } ?>


<a href="<?php echo base_url(); ?>index.php/staff"><button type="submit" class="btn btn-primary">View staff</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add staff</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('staff/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
						
							<div class="control-group">
							  <label class="control-label" for="cname">First Name*</label>
							  <div class="controls">
								<input type="text" class="span3" name="fname" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cname">Middle Name</label>
							  <div class="controls">
								<input type="text" class="span3" name="mname" >
							  </div>
							</div>
						
							<div class="control-group">
							  <label class="control-label" for="cname">Last Name*</label>
							  <div class="controls">
								<input type="text" class="span3" name="lname" >
							  </div>
							</div>

							<div class="control-group">
								<label class="control-label">Sex *</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="sex" id="optionsRadios1" value="Male" checked="">Male
								  </label>
								  <label class="radio">
									<input type="radio" name="sex" id="optionsRadios2" value="female">Female
								</label>
								</div>
							  </div>

						<div class="control-group">
							  <label class="control-label" for="cname">Address*</label>
							  <div class="controls">
								<input type="text" class="span3" name="address" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cname">Mobile</label>
							  <div class="controls">
								<input type="text" class="span3" name="phone" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cname">Email*</label>
							  <div class="controls">
								<input type="email" class="span3" name="email" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cname">Password*</label>
							  <div class="controls">
								<input type="text" class="span3" name="password" >
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="cname">Confirm Password*</label>
							  <div class="controls">
								<input type="text" class="span3" name="confaddress" >
							  </div>
							</div>

							  <div class="control-group">
								<label class="control-label" for="clevel">staff Status*</label>
								<div class="controls">
								  <select id="fac" name="status">
								    <option value="">-- Choose staff Status --</option>
									<option value="Active">Active</option>
									<option value="Deactive">DeActive</option>
									</select>
								</div>
							  </div>
                            
                            
							 
                           
							<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add staff</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 