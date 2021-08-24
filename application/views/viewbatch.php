
	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Batch</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/batch/add"><button type="submit" class="btn btn-primary">Add Batch</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Programme</h2>
						
					</div>
<!-- Here goes programme select option -->

					<center><div class="control-group">
								<label class="control-label" for="selectError">Select Programme</label>
								<div class="controls">
									<?php echo form_open('batch/batch_select'); ?>
								  <select id="selectprog" data-rel="chosen" name = 'programme' onchange='this.form.submit()'>
  								<option>Select Programme</option>

								  	<?php 
								  	foreach ($allprogramme as $prog) {

								  ?>
									<option value="<?php echo $prog->prog_id; ?>" <?php if(isset($progid)){
										if($prog->prog_id == $progid['prog_id']){
											echo "selected='selected'";
										}

									} ?> ><?php 
									 echo $prog->prog_name; ?></option>
									
									<?php } ?>
								  </select>
									<noscript><input type="submit" value="Submit"></noscript>

								</div>
</center>
</form>
								

								<!-- select option ends here -->

                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	  <th>SN</th>
								  <th>Year</th>
								  <th>Semester</th>
								  <th>Activities</th>
								  <th>Student</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
						  				if(isset($show)){

								foreach($allbatch as $batch){
								?>

							<tr>
                            <td><?php echo $sn++; ?></td>
								<td class="center"><?php echo $batch->batch_year; ?></td>
                                <td class="center"><a href="<?php echo base_url();?>/index.php/semester/sem_by_prog_batch/<?php echo $progid['prog_id'];?>/<?php echo $batch->batch_id; ?>">
                                	<?php echo 'Manage Semester'; ?></a></td>
                                <td class="center"><a href="<?php echo base_url();?>/index.php/activity/"><?php echo 'Manage Activity'; ?></a></td>
                                <td class="center"><a href="<?php echo base_url();?>/index.php/student/student_by_batch/<?php echo $progid['prog_id'];?>/<?php echo $batch->batch_id;?>"><?php echo 'Manage Students'; ?></a></td>

								<td class="center">
									
									<a class="btn btn-info" href="<?php echo base_url();?>/index.php/batch/edit_batch/<?php echo $batch->batch_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php }
							} ?>
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	