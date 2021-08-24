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
				<li><a href="#">View staff</a></li>
			</ul>          

			<a href="<?php echo base_url(); ?>index.php/staff/add"><button type="submit" class="btn btn-primary">Add staff</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>staff</h2>
						
					</div>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	<th>SN</th>
								  <th>staff Name</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allstaff as $staff){
								?>

							<tr>
                            	<td><?php echo $sn++; ?></td>
								<td class="center"><?php echo $staff->staff_fname; ?>
								<?php echo $staff->staff_mname; ?>
								<?php echo $staff->staff_lname; ?>
								</td>
								<td>
								
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" onclick="return confirm_delete();" href="<?php echo base_url(); ?>index.php/staff/delete/<?php echo $staff->staff_id;?>">
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
	