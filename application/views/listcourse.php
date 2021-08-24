	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Course</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/course/add"><button type="submit" class="btn btn-primary">Add Course</button></a>

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
								  <th>Course Code</th>
								  <th>Course Name</th>
								  <th>Faculty</th>
								  <th>Level</th>
                                  <th>Programme</th>
                                  <th>Semester</th>
                                  <th>Manage</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allcourse as $course){
								?>

							<tr>
                            <td><?php echo $sn++; ?></td>
								<td><?php echo $course->course_code; ?></td>
								<td class="center"><?php echo $course->course_name; ?></td>
								
								<td class="center"><?php echo $course->course_faculty; ?></td>
                                <td class="center"><?php echo $course->course_level; ?></td>
                                <td class="center"><?php echo $course->course_programme; ?></td>
                                <td class="center"><?php echo $course->course_semester; ?></td>
                         		<td><a href="<?php echo base_url();?>/index.php/assignment/getall/<?php echo $course->course_id;?>"><?php echo "Manage Assignment"?></a><br>
                         		<a href="<?php echo base_url();?>/index.php/student/student_by_semester"><?php echo 'Manage Teacher';?></td>
								
								<td class="center">
									
									<a class="btn btn-info" href="<?php echo base_url();?>index.php/course/edit_course/<?php echo $course->course_id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo base_url();?>index.php/course/delete_course/<?php echo $course->course_id;?>">
										<i class="halflings-icon white trash" onClick="return doConfirm()">X</i> 
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


<script>
function doConfirm()

{

	msg=confirm("Are you sure you want to delete this banner Permanently?");

	if(msg!=true)

	{

		return false;

	}

}


</script>
	