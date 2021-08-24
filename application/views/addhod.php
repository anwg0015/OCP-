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
				<li><a href="#">Add HOD</a></li>
			</ul>

<a href="<?php echo base_url(); ?>index.php/hod"><button type="submit" class="btn btn-primary">View HOD</button></a>

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
								<label class="control-label" for="selectError">Select Teacher*</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="teacherid">
								    <option value="">-- Choose Teacher --</option>

								  	<?php foreach ($allteacher as $teach) {
								  	?>
									<option value="<?php echo $teach->teac_id;?>"> <?php echo $teach->teac_fname."&nbsp".$teach->teac_lname; ?></option>
									
									<?php } ?>
								  </select>
								</div>
							  </div>


							<div class="control-group">
								<label class="control-label" for="clevel">Select Programme*</label>
								<div class="controls">
								  <select id="fac" name="progid">
								    <option value="">-- Choose Programme --</option>
								    <?php foreach ($allprog as $prog) {

								    ?>
									<option value="<?php echo $prog->prog_id; ?>"><?php echo $prog->prog_name; ?></option>
									<?php } ?>
									</select>
								</div>
							  </div>
                            
                            
							
                      
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  
                        </div> 