	<script>
('#programme').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Programme</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/Programme"><button type="submit" class="btn btn-primary">View Programme</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Programme</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('programme/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
						
							<div class="control-group">
							  <label class="control-label" for="cname">Programme Name*</label>
							  <div class="controls">
								<input type="text" class="span3" name="pname" >
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="clevel">Programme Type*</label>
								<div class="controls">
								  <select id="fac" name="ptype">
								    <option value="">-- Choose Programme Level --</option>
									<option value="Graduate">Graduate</option>
									<option value="Undergraduate">Undergraduate</option>
									<option value="Postgraduate">Postgraduate</option>
									</select>
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="clevel">Programme Status*</label>
								<div class="controls">
								  <select id="fac" name="pstatus">
								    <option value="">-- Choose Programme Status --</option>
									<option value="Active">Active</option>
									<option value="Deactive">DeActive</option>
									<option value="Pending">Pending</option>
									</select>
								</div>
							  </div>
                            
                            
							 
                           
							<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Programme</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 