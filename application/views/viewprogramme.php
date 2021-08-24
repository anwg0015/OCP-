	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Course</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/programme/add"><button type="submit" class="btn btn-primary">Add Programme</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Programme</h2>
						
					</div>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	  <th>SN</th>
								  <th>Name</th>
								  <th>Programme Type</th>
								  <th>manage</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allprog as $prog){
								?>

							<tr>
                            <td><?php echo $sn++; ?></td>
								<td class="center"><?php echo $prog->prog_name; ?></td>
								<td class="center"><?php echo $prog->prog_type; ?></td>
                                <td class="center"><a href="<?php echo base_url();?>/index.php/batch/batch_by_id/<?php echo $prog->prog_id; ?>"><?php echo 'Manage Batch'; ?></a></td>
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
	