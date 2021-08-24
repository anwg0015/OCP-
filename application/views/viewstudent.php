	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View student</a></li>
			</ul>          
<a href="<?php echo base_url(); ?>index.php/student/add"><button type="submit" class="btn btn-primary">ADD Student</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>student</h2>

						
					</div>
					<center><div class="control-group">
								<label class="control-label" for="selectError">Select Batch</label>
								<div class="controls">
									<?php echo form_open('student/student_by_batch'); ?>
									<input type='hidden' name='progid' value='<?php echo $progid; ?>'>
									
									
																	  <select id="selectError" data-rel="chosen" name = 'batcid' onchange='this.form.submit()'>


  								<option>Select Batch</option>
  							

								  	<?php 
								  	foreach ($allbatch as $batch)

								  	 {

								  ?>


									<option value="<?php echo $batch->batch_id; ?>" 
										<?php if($batch->batch_id== $batcid){
											echo "selected='selected'"; }?>>
										<?php 
									 echo $batch->batch_year; ?></option>
									<?php } ?>
								  </select>

								</div>
					<noscript><input type="submit" value="Submit"></noscript>
</center>

                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	<th>SN</th>
								  <th>Name</th>
								  <th>Address</th>
								  <th>E-mail</th>
								  <th>Phone</th>
								  <th>Student Level</th>
								  <th>Programme</th>
                                  <th>Batch</th>
                                  
                                  
                                  
  								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allstudent as $student){
								?>

							<tr>
                            	<td><?php echo $sn++; ?></td>
								<td class="center"><a href="#"><?php echo $student->std_name;?> 
								<td class="center"><?php echo $student->std_address; ?></td>
								<td class="center"><?php echo $student->std_email; ?></td>
                                <td class="center"><?php echo $student->std_phone; ?></td>
                                <td class="center"><?php echo $student->std_level; ?></td>
                                
                                <td class="center"><?php echo $student->std_programme; ?></td>
                                
                               
                               
                          <td class="center"><?php echo $student->std_batch; ?></td>                             
                                

								<td class="center">
									
									<abbr title="EDIT"><a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a></abbr>
									<abbr title="DELETE"><a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a></abbr>
								</td>
							</tr>
							<?php } ?>
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	