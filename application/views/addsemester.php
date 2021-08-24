  <script>
('#semester').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">ADD semester</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/semester"><button type="submit" class="btn btn-primary">View Semester</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Semester</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('semester/insert_sem',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
						
							<div class="control-group">
							  <label class="control-label" for="cname">Semester Name*</label>
							  <div class="controls">
								<input type="text" class="span3" name="sname" >
							  </div>
							</div><div class="control-group">
							  <label class="control-label" for="cname">Semester Fall Year*</label>
							  <div class="controls">
								<input type="text" class="span3" name="sfall" >
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="clevel">Batch*</label>
								<div class="controls">
								  <select id="fac" name="bid">
									<option value="">-- Choose semester batch --</option>

								  	<?php foreach ($allbatch as $batch) {
								  		# code...
								  	
								  	?>
									<option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_year; ?></option>
									<?php } ?>									
									</select>
								</div>
							  </div>
							  <div class="control-group">
							  <label class="control-label" for="cname">Routine*</label>
							  <div class="controls">
								<textarea name="routine" class="ckeditor"></textarea>
							  </div>
							</div>
							  <div class="control-group">
								<label class="control-label" for="clevel">Status*</label>
								<div class="controls">
								  <select id="fac" name="sstatus">
								    <option value="">-- Choose semester Status --</option>
									<option value="Running">Running</option>
									<option value="Completed">Completed</option>
									<option value="Pending">Pending</option>
									</select>
								</div>
							  </div>
                            <input type="hidden" name="progid" value="<?php echo $progid; ?>"> 
                            
							 
                           
							<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Semester</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 