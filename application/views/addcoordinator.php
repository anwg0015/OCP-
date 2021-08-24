	<script>
('#course').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Coordinator</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/coordinator/viewcoordinator"><button type="submit" class="btn btn-primary">View Coordinator</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Coordinator</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('hod/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
							
						<div class="control-group">
								<label class="control-label" for="selectError">Select Programme*</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="teacherid">
								    <option value="">-- Choose Programme --</option>

								  	
								  	
									<option value=""></option>
									
									
								  </select>
								</div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="co_name"> Name* </label>
							  <div class="controls">
								<input type="text" class="span3" id="co_name" name='co_name' required="required" >
								</div>
								</div>

							<div class="control-group">
							  <label class="control-label" for="co_name"> Email* </label>
							  <div class="controls">
								<input type="text" class="span3" id="co_email" name='co_email' required="required" >
								</div>
								</div>

								<div class="control-group">
							  <label class="control-label" for="co_address"> Address </label>
							  <div class="controls">
								<input type="text" class="span3" id="co_address" name='co_address' required="required" >
								</div>
								</div>

								<div class="control-group">
							  <label class="control-label" for="co_phone"> Phone </label>
							  <div class="controls">
								<input type="text" class="span3" id="co_phone" name='co_phone' required="required" >
								</div>
								</div>

								<div class="control-group">
							  <label class="control-label" for="co_password"> Password * </label>
							  <div class="controls">
								<input type="text" class="span3" id="co_password" name='co_password' required="required" >
								</div>
								</div>
								
								<div class="control-group">
							  <label class="control-label" for="co_name"> Confirm Password *</label>
							  <div class="controls">
								<input type="text" class="span3" id="co_password" name='co_cpassword' required="required" >
								</div>
								</div>
	
						<div class="form-group">
						<label  class="control-label col-lg-2">Status</label>
				<div class="col-lg-6">
				<input type="radio" name="status" checked="checked" value="1" />Active
				<input type="radio" name="status" value="0" >Inactive
				 </div></div>
							
                            
                            
							
                      
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 