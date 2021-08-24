	<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url(); ?>/index.php/login/mainpage">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">View Coordinator</a></li>
			</ul>          
<a href="<?php echo base_url(); ?>index.php/coordinator"><button type="submit" class="btn btn-primary">ADD Coordinator</button></a>

				<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Coordinator</h2>

						
					</div>
					<center><div class="control-group">
								<label class="control-label" for="selectError">Select Programme</label>
								<div class="controls">
									<?php echo form_open('coordinator/viewcoordinator'); ?>
									<input type='hidden' name='progid'>
									
									
																	  <select id="selectError" data-rel="chosen" name = 'batcid' onchange='this.form.submit()'>


  								<option>Select Programme</option>
  							

								  	


									<option value="">
										</option>
								
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
								  <th>E-mail</th>
								  <th>Address</th>
								   <th>Phone</th>
								   <th>Status</th>
									<th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  		
								

							<tr>
                            	<td></td>
								<td class="center"></td> 
								<td class="center"></td>
								<td class="center"></td>
                                <td class="center"></td>
                                <td class="center"></td>
                                                      
                                

								<td class="center">
									
									<abbr title="EDIT"><a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a></abbr>
									<abbr title="DELETE"><a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a></abbr>
								</td>
							</tr>
							
                           
                            
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        </div>
	