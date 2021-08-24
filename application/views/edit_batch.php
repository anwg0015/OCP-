	<script>
('#batch').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View batch</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/batch"><button type="submit" class="btn btn-primary">View Batch</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add batch</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal');
						echo form_open('batch/edit_batch',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>
                         
						<?php 
						foreach($allbatch as $batch)
							{
							?>
							<div class="control-group">
							  <label class="control-label" for="cname">Batch Year*</label>
							  <div class="controls">
								<input type="text" class="span3" name="byear" value="<?php echo $batch->batch_year;?>" >
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="clevel">Batch Programme*</label>
								<div class="controls">
								  <select id="fac" name="bid">
									<option value="<?php echo $batch->prog_id; ?>"><?php echo $batch->prog_name; ?></option>

								  	 
									
																	
									</select>
								</div>
							  </div>
							 
				<!--
				 <div class="control-group">
								<label class="control-label" for="clevel">batch Status*</label>
								<div class="controls">
								  <select id="fac" name="bstatus">
								    <option value="">-- Choose batch Status --</option>
									<option value="Active">Active</option>
									<option value="Deactive">DeActive</option>
									<option value="Pending">Pending</option>
									</select>
								</div>
							  </div>
                            
 
			                        
							 
                  -->         
							<div class="control-group hidden-phone">
							  
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add batch</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						  <?php }?>
						</form>  
                        </div> 