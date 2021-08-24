 	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Semester</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/semester/add/<?php echo $progid.'/'.$batchd; ?>"><button type="submit" class="btn btn-primary">Add Semester</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Programme</h2>
						
					</div>
<!-- Here goes programme select option -->

					<center><div class="control-group">
								<label class="control-label" for="selectError">Select Batch</label>
								<div class="controls">
									<?php echo form_open('semester/sem_from_viewsem'); ?>
									<input type='hidden' name='progid' value='<?php echo $progid; ?>'>
								  <select id="selectError" data-rel="chosen" name = 'programme' onchange='this.form.submit()'>
  								<option>Select Batch</option>

								  	<?php 
								  	foreach ($allbatch as $batch) {

								  ?>
									<option value="<?php echo $batch->batch_id; ?>" 
										<?php if($batch->batch_id == $batchd){
											echo "selected='selected'"; }?>>
										<?php 
									 echo $batch->batch_year; ?></option>
									<?php } ?>
								  </select>

								</div>
					<noscript><input type="submit" value="Submit"></noscript>
</center>
</form>
								

								<!-- select option ends here -->

                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	  <th>SN</th>
								  <th>Name </th>
								  <th>Status</th>
								  <th>Manage</th>
								  
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
						  				

								foreach($allsem as $sem){
								?>

							<tr>
                            <td><?php echo $sn++; ?></td>
								<td class="center"><?php echo $sem->sem_name; ?></td>
								<td class="center"><?php echo $sem->sem_status; ?></td>
                                <td class="center">
                                	
                                	<a href="<?php echo base_url();?>/index.php/student/student_by_semester"><?php echo 'Manage Student';?></a><br>
                                <a href="<?php echo base_url();?>/index.php/course"><?php echo 'Manage Subject'; ?></a></br>
                                <a target="new" href="<?php echo base_url();?>/index.php/routine/view_rou/<?php echo $sem->sem_id;?>"><?php echo 'Manage Routine'; ?></a></td>

								<td class="center">
									
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	