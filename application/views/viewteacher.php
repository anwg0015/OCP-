	<script>
function confirm_delete(){
	
var deletedata=confirm("Are u sure want to delete?");
	if(deletedata==true){
		return true;
	}else{
		return false;
	}	
	
}

</script>


	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View teacher</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/teacher/add"><button type="submit" class="btn btn-primary">Add Teacher</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Teacher</h2>
						
					</div>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	<th>SN</th>
								  <th>Name</th>
                                  <th>Subject</th>
                                  <th>E-mail</th>
                                  <th>Phone</th>
                                  <th>Status</th>
  								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allteacher as $teacher){
								?>

							<tr>
                            	<td><?php echo $sn++; ?></td>
								<td class="center"><a href="#"><?php echo $teacher->teac_fname;?> 
								<?php echo $teacher->teac_mname; ?> 
								<?php echo $teacher->teac_lname; ?> </td></a>
								
                                <td class="center"><a href=""><?php echo "View Subject";?></a></td>
                                <td class="center"><?php echo $teacher->teac_email; ?></td>
                                <td class="center"><?php echo $teacher->teac_phone; ?></td>
                                <td class="center"><?php echo $teacher->teac_status; ?></td>
								<td class="center">
									
									<abbr value="edit" title="Edit"><a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a></abbr>
									<abbr title="Delete"><a class="btn btn-danger" href="<?php echo base_url();?>index.php/teacher/delete/<?php echo $teacher->teac_id;?>" onclick="return confirm_delete();">
										<i class="halflings-icon white trash"></i> 
									</a></abbr>
									<abbr title="Reset Password" ><a class="btn btn-danger" href="#">
										<i class="halflings-icon white edit"></i>  
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
	