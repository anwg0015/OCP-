	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Course</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/assignment"><button type="submit" class="btn btn-primary">Add Assignment</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Courses</h2>
						
					</div>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	<th>SN</th>
								  <th>Assignment No</th>
								  <th>Course Name</th>
								  <th>Create Date</th>
                                  <th>Submission Date</th>
                                  <th>Assigment File</th>
                                   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  				<?php 
								foreach($allassignment as $assign){
								?>

							<td><?php echo $sn++; ?></td>
								<td class="center"><?php echo $assign->assignment_name; ?></td>
                                <td class="center"><?php echo $assign->course_name;?></td>
                                	
                                <td class="center"><?php echo $assign->assignment_createdate;?></td>
                                <td class="center"><?php echo $assign->assignment_submissiondate;?></td>
                                <td class="center"><a href="<?=base_url()?>application/views/upload/<?php echo $assign->assignment_id;?>"><?php echo $assign->assignment_file;?> 



                                </a></td>

								<td class="center">
									
									<a class="btn btn-info" href="<?php echo base_url()?>/index.php/assignment/edit_assignment/<?php echo $assign->assignment_id?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php }
							 ?>
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	
