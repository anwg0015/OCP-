	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View HOD</a></li>
			</ul>          
			<a href="<?php echo base_url(); ?>index.php/hod/add"><button type="submit" class="btn btn-primary">Add HOD</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>HOD</h2>
						
					</div>
                    
					<div class="box-content">
						<?php $sn=1; ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
                              	<th>SN</th>
								  <th>Name</th>
								  <th>HOD Level</th>
                                  <th>Programme</th>
                                  <th>E-mail</th>
                                  <th>Phone</th>
  								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  				<?php 
								foreach($allhod as $hod){
								?>

							<tr>
                            	<td><?php echo $sn++; ?></td>
								<td class="center"><abbr title="View Details"><a href="#"><?php echo $hod->teac_fname;?> 
								<?php echo $hod->teac_mname; ?> 
								<?php echo $hod->teac_lname; ?> </td></a>
								
								<td class="center"><?php echo $hod->teac_level; ?></td>
                                <td class="center"><?php echo $hod->teac_programme; ?></td>
                                <td class="center"><?php echo $hod->teac_email; ?></td>
                                <td class="center"><?php echo $hod->teac_phone; ?></td>
								<td class="center">
									
									<abbr title="EDIT"><a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a></abbr>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 

									
								</td>
							</tr>
							<?php } ?>
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	