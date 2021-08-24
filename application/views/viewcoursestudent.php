	<div class="row">
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
								  
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
                            <td></td>
								<td></td>
								<td class="center"></td>
								
								<td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                         		<td><a href="<?php echo base_url();?>/index.php/assignment/getall/<?php echo $course->course_id;?>"><?php echo "Manage Assignment"?></a><br>
                         		
								
								
							</tr>
							
                           
                            
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
	