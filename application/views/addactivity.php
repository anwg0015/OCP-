 	  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/combodate.js"></script>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/moment.js"></script>

	<script>
('#student').addClass('active');
</script>
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add Activities</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/activity"><button type="submit" class="btn btn-primary">List Activities</button></a>

				<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon book"></i><span class="break"></span>Add Activities</h2>
						
					</div>
					<div class="box-content">
						<?php $attributes = array('class' => 'form-horizontal
							');
						echo form_open('activity/insert',$attributes);
						?>
						  <fieldset>
                          
                         
                          <br>

							<div class="control-group">
							  <label class="control-label" for="sname">Activity Name* </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='ac_name' >
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="sname">Planned Date* </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='ac_date' >							
							  </div>
							</div>

				<div class="control-group">
							  <label class="control-label" for="sname">Time* </label>
							  <div class="controls ">
								<input type="text" class="span3" id="sname" name='ac_time' >		
							  </div>
							</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venue*:</label>
<div class="controls">
<input type="text" id="addr" name="ac_venue" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expected Participant*:</label>
<div class="controls">
<input type="text" id="addr" name="ac_num" class="form-control">
</div>
</div>

<div class="control-group">
<label class="control-label">Status *</label>
<div class="controls">
 <label class="radio">
<input type="radio" name="ac_status" id="optionsRadios1" value="Active" checked="">Active</label>
<label class="radio">
<input type="radio" name="ac_status" id="optionsRadios2" value="Inactive">Inactive</label>
</div></div>

	
	
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Activity</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 